<?php

namespace App\Controller;

use App\Entity\AsCie10;
use App\Entity\AsConsultasProcedimientos;
use App\Entity\AsCups;
use App\Entity\RipsTablaReferenciaCausaExternaV2;
use App\Entity\RipsTablaReferenciaFinalidadConsultaV2;
use App\Entity\RipsTablaReferenciaServicio;
use App\Repository\AsCie10Repository;
use App\Repository\AsConsultasProcedimientosRepository;
use App\Repository\AsCupsRepository;
use App\Repository\RipsTablaReferenciaCausaExternaV2Repository;
use App\Repository\RipsTablaReferenciaFinalidadConsultaV2Repository;
use App\Repository\RipsTablaReferenciaServicioRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

class ExampleController extends AbstractController
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    #[Route('/', name: 'index')]
    public function index(
        AsConsultasProcedimientosRepository $procedimientos,
        RipsTablaReferenciaServicioRepository $refServ,
        FlashBagInterface $flashBag,
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response {
        $itemsPerPage = 10;
        $page = max(1, $request->query->getInt('page', 1));
        $offset = ($page - 1) * $itemsPerPage;

        // Capturar los valores de los filtros desde la solicitud
        $codigoCups = $request->query->get('codigo_cups', null);
        $descripcionCups = $request->query->get('descripcion_cups', null);
        // Modificar el repositorio para aplicar los filtros
        $paginator = $procedimientos->getConsultasPagination($offset, $itemsPerPage, $codigoCups, $descripcionCups);
        $totalCount = count($paginator);
        $totalPages = (int) ceil($totalCount / $itemsPerPage);

        $serv = $refServ->findAll();

        $groupedData = [];
        foreach ($serv as $service) {
            $grupoCodigo = $service->getGrupoCodigo(); // Cambia según los nombres de tus métodos
            $grupoNombre = $service->getGrupoNombre();
            $codigo = $service->getCodigo();
            $nombre = $service->getNombre();

            // Agrupar por `grupo_codigo`
            if (!isset($groupedData[$grupoCodigo])) {
                $groupedData[$grupoCodigo] = [
                    'nombre' => $grupoNombre,
                    'items' => [],
                ];
            }
            $groupedData[$grupoCodigo]['items'][] = [
                'codigo' => $codigo,
                'nombre' => $nombre,
            ];
        }

        /// Recuperar errores desde el FlashBag
        $errors = $flashBag->get('errors', []);
        // $oldData = $flashBag->get('oldData', []);

        if (!empty($errors)) {
            $errors = $errors[0]; // Tomar el primer elemento del array
        }

        return $this->render('example/index.html.twig', [
            'groupedData' => $groupedData,
            'errors' => $errors,
            'paginator' => $paginator,
            'totalCount' => $totalCount,
            'totalPages' => $totalPages,
            'offset' => $offset,
            'page' => $page,
            'itemsPerPage' => $itemsPerPage,
            'codigoCups' => $codigoCups,
            'descripcionCups' => $descripcionCups,
        ]);
    }

    #[Route('/example', name: 'app_example_create', methods: ['POST'])]
    public function save(
        Request $request,
        ValidatorInterface $validator,
        RequestStack $requestStack,
        FlashBagInterface $flashBag, // Inyección del servicio FlashBagInterface
        EntityManagerInterface $em, // Inyección del Entity Manager
        AsCupsRepository $as
    ): Response {

        $requestStack->getCurrentRequest()->setLocale('es');

        $data = $request->request->all();

        // Definir las restricciones de validación
        $fields = [
            'cups' => [
                new Assert\NotBlank(['message' => 'El campo CUPS es obligatorio.'])
            ],
            'tipo_cita' => [
                new Assert\NotBlank(['message' => 'El tipo de cita es obligatorio.']),
            ],
            'grupo' => [
                new Assert\NotBlank(['message' => 'El grupo es obligatorio.']),
            ],
            'servicio' => [
                new Assert\NotBlank(['message' => 'El servicio es obligatorio.']),
            ],
            'diag' => [
                new Assert\NotBlank(['message' => 'El diagnóstico es obligatorio.']),
            ],
            'tipo_diag' => [
                new Assert\NotBlank(['message' => 'El tipo de diagnóstico es obligatorio.']),
            ],
            'causa_externa' => [
                new Assert\NotBlank(['message' => 'La causa externa es obligatoria.']),
            ],
            'finalidad' => [
                new Assert\NotBlank(['message' => 'La finalidad es obligatoria.']),
            ],
        ];

        // Validar los datos
        $violations = $validator->validate($data, new Assert\Collection(['fields' => $fields, 'allowExtraFields' => true,]));

        // Si hay errores de validación
        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $violation) {
                $field = str_replace(['[', ']'], '', $violation->getPropertyPath());
                $errors[$field][] = $violation->getMessage();
            }

            $flashBag->add('errors', $errors);
            $flashBag->set('oldData', $data);

            // Renderizar el formulario nuevamente con errores
            return $this->redirectToRoute('index');
        }

        $consulta = new AsConsultasProcedimientos();

        // Mapear datos a la entidad
        $cups = $em->getRepository(AsCups::class)->findOneBy(['codigo_cups' => $data['cups']]);
        $servicio = $em->getRepository(RipsTablaReferenciaServicio::class)->find($data['servicio']);
        $diagnostico = $em->getRepository(AsCie10::class)->findOneBy(['cie_10' => $data['diag']]);
        $finalidad = $em->getRepository(RipsTablaReferenciaFinalidadConsultaV2::class)->find($data['finalidad']);
        $causaExterna = $em->getRepository(RipsTablaReferenciaCausaExternaV2::class)->find($data['causa_externa']);

        $consulta->setCups($cups);
        $consulta->setTipoServicio($data['tipo_cita']);
        $consulta->setInformeOportunidad($data['informe_oportunidad'] === 'true' ? true : false);
        $consulta->setServicioRipsCode($servicio);
        $consulta->setDiagnosticoDefaults($diagnostico);
        $consulta->setFinalidad($finalidad);
        $consulta->setCausaExterna($causaExterna);
        $consulta->setTipoDiagnostico($data['tipo_diag']);
        $consulta->setCreatedBy('usuario_actual'); // Puedes reemplazar con el usuario autenticado

        $em->persist($consulta);
        $em->flush();

        $flashBag->add('success', 'Formulario guardado con éxito.');

        // Redirigir a la ruta "/"
        return $this->redirectToRoute('index');
    }

    #[Route('/edit/{id}', name: 'app_example_edit', methods: ['GET'])]
    public function edit($id, EntityManagerInterface $em): Response
    {
        // Buscar el registro por ID
        $consulta = $em->getRepository(AsConsultasProcedimientos::class)->find($id);

        if (!$consulta) {
            // Si no se encuentra, redirigir o mostrar un mensaje de error
            throw $this->createNotFoundException('Registro no encontrado.');
        }

        // Retornar los datos de la consulta en formato JSON para el modal
        return $this->json([
            'success' => true,
            'cups' => $consulta->getCups()->getCodigoCups(),
            'tipo_cita' => $consulta->getTipoServicio(),
            'servicio' => $consulta->getServicioRipsCode()->getCodigo(),
            'grupo' => $consulta->getServicioRipsCode()->getGrupoCodigo(),
            'diag' => $consulta->getDiagnosticoDefaults()->getCie10(),
            'tipo_diag' => $consulta->getTipoDiagnostico(),
            'causa_externa' => $consulta->getCausaExterna()->getCodigo(),
            'finalidad' => $consulta->getFinalidad()->getCodigo(),
            'informe' => $consulta->isInformeOportunidad()
        ]);
    }

    #[Route('/update', name: 'app_example_update', methods: ['POST'])]
    public function update(
        Request $request,
        ValidatorInterface $validator,
        RequestStack $requestStack,
        FlashBagInterface $flashBag, // Inyección del servicio FlashBagInterface
        EntityManagerInterface $em, // Inyección del Entity Manager
        AsConsultasProcedimientosRepository $repo
    ): Response {

        $requestStack->getCurrentRequest()->setLocale('es');

        $data = $request->request->all();

        // Definir las restricciones de validación
        $fields = [
            'cups' => [
                new Assert\NotBlank(['message' => 'El campo CUPS es obligatorio.'])
            ],
            'tipo_cita' => [
                new Assert\NotBlank(['message' => 'El tipo de cita es obligatorio.']),
            ],
            'grupo' => [
                new Assert\NotBlank(['message' => 'El grupo es obligatorio.']),
            ],
            'servicio' => [
                new Assert\NotBlank(['message' => 'El servicio es obligatorio.']),
            ],
            'diag' => [
                new Assert\NotBlank(['message' => 'El diagnóstico es obligatorio.']),
            ],
            'tipo_diag' => [
                new Assert\NotBlank(['message' => 'El tipo de diagnóstico es obligatorio.']),
            ],
            'causa_externa' => [
                new Assert\NotBlank(['message' => 'La causa externa es obligatoria.']),
            ],
            'finalidad' => [
                new Assert\NotBlank(['message' => 'La finalidad es obligatoria.']),
            ],
        ];

        // Validar los datos
        $violations = $validator->validate($data, new Assert\Collection(['fields' => $fields, 'allowExtraFields' => true,]));

        // Si hay errores de validación
        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $violation) {
                $field = str_replace(['[', ']'], '', $violation->getPropertyPath());
                $errors[$field][] = $violation->getMessage();
            }

            $flashBag->add('errors', $errors);
            $flashBag->set('oldData', $data);

            // Renderizar el formulario nuevamente con errores
            return $this->redirectToRoute('index');
        }

        $consulta = $repo->find($data['id']);
        if (!$consulta) {
            $flashBag->add('error', 'No se encontró la consulta con el ID especificado.');
            return $this->redirectToRoute('index');
        }

        // Actualizar los campos en la entidad
        if (isset($data['cups'])) {
            $cups = $em->getRepository(AsCups::class)->findOneBy(['codigo_cups' => $data['cups']]);
            if ($cups) {
                $consulta->setCups($cups);
            }
        }

        if (isset($data['cups'])) {
            if ($cups) {
                $consulta->setInformeOportunidad($data['informe_oportunidad'] === 'true' ? true : false);
            }
        }

        if (isset($data['tipo_cita'])) {
            $consulta->setTipoServicio($data['tipo_cita']);
        }

        if (isset($data['servicio'])) {
            $servicio = $em->getRepository(RipsTablaReferenciaServicio::class)->find($data['servicio']);
            if ($servicio) {
                $consulta->setServicioRipsCode($servicio);
            }
        }

        if (isset($data['diag'])) {
            $diagnostico = $em->getRepository(AsCie10::class)->findOneBy(['cie_10' => $data['diag']]);
            if ($diagnostico) {
                $consulta->setDiagnosticoDefaults($diagnostico);
            }
        }

        if (isset($data['finalidad'])) {
            $finalidad = $em->getRepository(RipsTablaReferenciaFinalidadConsultaV2::class)->find($data['finalidad']);
            if ($finalidad) {
                $consulta->setFinalidad($finalidad);
            }
        }

        if (isset($data['causa_externa'])) {
            $causaExterna = $em->getRepository(RipsTablaReferenciaCausaExternaV2::class)->find($data['causa_externa']);
            if ($causaExterna) {
                $consulta->setCausaExterna($causaExterna);
            }
        }

        if (isset($data['tipo_diag'])) {
            $consulta->setTipoDiagnostico($data['tipo_diag']);
        }

        // Otros campos que quieras actualizar...

        // Guardar los cambios en la base de datos
        $em->persist($consulta);
        $em->flush();

        // Redirigir con un mensaje de éxito
        $flashBag->add('success', 'Formulario actualizado con éxito.');
        return $this->redirectToRoute('index');
    }

    #[Route('/delete/{id}', name: 'app_example_delete', methods: ['DELETE'])]
    public function eliminarDato(int $id, AsConsultasProcedimientosRepository $consultas, EntityManagerInterface $em): Response
    {
        $consult = $consultas->find($id);

        if ($consult) {
            $em->remove($consult);
            $em->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'message' => 'Dato no encontrado'], 404);
    }

    #[Route('/diagnostico/suggestions', name: 'diagnostico_suggestions', methods: ['GET'])]
    public function diagnosticoSuggestions(Request $request, AsCie10Repository $cie10Repository): JsonResponse
    {
        $query = $request->query->get('q', '');

        $results = $cie10Repository->findByQuery($query);

        $suggestions = array_map(function ($cie10) {
            return [
                'id' => $cie10->getCie10(),
                'text' => $cie10->getNombre(),
            ];
        }, $results);

        return $this->json($suggestions);
    }

    #[Route('/causa/externa', name: 'causa_externa', methods: ['GET'])]
    public function causaExterna(Request $request, RipsTablaReferenciaCausaExternaV2Repository $causaRepository): JsonResponse
    {
        $query = $request->query->get('q', '');

        $results = $causaRepository->findByQuery($query);

        $suggestions = array_map(function ($causa) {
            return [
                'id' => $causa->getCodigo(),
                'text' => $causa->getNombre(),
            ];
        }, $results);

        return $this->json($suggestions);
    }

    #[Route('/finalidad/data', name: 'finalidad_data', methods: ['GET'])]
    public function finalidadData(Request $request, RipsTablaReferenciaFinalidadConsultaV2Repository $finalidadRepository): JsonResponse
    {
        $query = $request->query->get('q', '');

        $results = $finalidadRepository->findByQuery($query);

        $val = array_map(function ($value) {
            return [
                'id' => $value->getCodigo(),
                'text' => $value->getNombre(),
            ];
        }, $results);

        return $this->json($val);
    }

    #[Route('cups', name: 'cups', methods: ['GET'])]
    public function cupsData(Request $request, AsCupsRepository $asCups): JsonResponse
    {
        $query = $request->query->get('q', '');
        $results = $asCups->findByQuery($query);

        $val = array_map(function ($value) {
            return [
                'id' => $value->getCodigoCups(),
                'text' => $value->getDescripcionCups()
            ];
        }, $results);

        return $this->json($val);
    }

    public function validateFields(Request $request, array $fields): array
    {
        $errors = [];
        $data = [];

        // Obtener los valores de los campos desde la petición
        foreach ($fields as $field => $constraints) {
            $data[$field] = $request->request->get($field);
        }

        // Validar los datos
        $violations = $this->validator->validate($data, new Assert\Collection($fields));

        // Preparar los errores, agrupándolos por campo
        foreach ($violations as $violation) {
            $field = str_replace(['[', ']'], '', $violation->getPropertyPath());
            $errors[$field][] = $violation->getMessage();
        }

        return $errors;
    }

    #[Route('/export', name: 'export_data', methods: ['GET'])]
    public function exportData(AsConsultasProcedimientosRepository $procedimientos, EntityManagerInterface $em): Response
    {
        $data = $procedimientos->findBy([], ['id' => 'DESC']); // Reemplaza con tu lógica para obtener los datos

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Definir los encabezados
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Código Cups');
        $sheet->setCellValue('C1', 'Descripción Cups');
        $sheet->setCellValue('D1', 'Tipo');
        $sheet->setCellValue('E1', 'Informe Oportunidad');
        $sheet->setCellValue('F1', 'Díagnostico');
        $sheet->setCellValue('G1', 'Finalidad');
        $sheet->setCellValue('H1', 'Causa Externa');
        $sheet->setCellValue('I1', 'Codigo Servicios Rips');
        $sheet->setCellValue('J1', 'Tipo Díagnostico');
        $sheet->setCellValue('K1', 'Creado Por');
        $sheet->setCellValue('L1', 'Creado En');

        // Estilo para los encabezados
        $headerStyle = [
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => '4CAF50'],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle('A1:L1')->applyFromArray($headerStyle);

        // Ajustar el tamaño de las columnas manualmente
        $sheet->getColumnDimension('A')->setWidth(10); // Ajusta la columna A
        $sheet->getColumnDimension('B')->setWidth(20); // Ajusta la columna B
        $sheet->getColumnDimension('C')->setWidth(30); // Ajusta la columna C
        $sheet->getColumnDimension('D')->setWidth(15); // Ajusta la columna D
        $sheet->getColumnDimension('E')->setWidth(20); // Ajusta la columna E
        $sheet->getColumnDimension('F')->setWidth(30); // Ajusta la columna F
        $sheet->getColumnDimension('G')->setWidth(25); // Ajusta la columna G
        $sheet->getColumnDimension('H')->setWidth(25); // Ajusta la columna H
        $sheet->getColumnDimension('I')->setWidth(20); // Ajusta la columna I
        $sheet->getColumnDimension('J')->setWidth(20); // Ajusta la columna J
        $sheet->getColumnDimension('K')->setWidth(15); // Ajusta la columna K
        $sheet->getColumnDimension('L')->setWidth(20); // Ajusta la columna L

        // Rellenar las filas con los datos
        $row = 2; // Empezamos desde la fila 2
        foreach ($data as $item) {
            if ($item->getTipoServicio() == '01') {
                $tipoServ = 'Impresión diagnóstica';
            } else if ($item->getTipoServicio() == '02') {
                $tipoServ = 'Confirmado nuevo';
            } else {
                $tipoServ = 'Confirmado repetido';
            }

            $sheet->setCellValue('A' . $row, $item->getId());
            $sheet->setCellValue('B' . $row, $item->getCups()->getCodigoCups());
            $sheet->setCellValue('C' . $row, $item->getCups()->getDescripcionCups());
            $sheet->setCellValue('D' . $row, $item->getTipoServicio() == '1' ? 'Consulta' : 'Procedimiento');
            $sheet->setCellValue('E' . $row, $item->isInformeOportunidad());
            $sheet->setCellValue('F' . $row, $item->getDiagnosticoDefaults()->getCie10() . ': ' . $item->getDiagnosticoDefaults()->getNombre());
            $sheet->setCellValue('G' . $row, $item->getFinalidad()->getCodigo() . ': ' . $item->getFinalidad()->getNombre());
            $sheet->setCellValue('H' . $row, $item->getCausaExterna()->getCodigo() . ': ' . $item->getCausaExterna()->getNombre());
            $sheet->setCellValue('I' . $row, $item->getServicioRipsCode()->getCodigo() . ': ' . $item->getServicioRipsCode()->getNombre());
            $sheet->setCellValue('J' . $row, $tipoServ);
            $sheet->setCellValue('K' . $row, $item->getCreatedBy());
            $sheet->setCellValue('L' . $row, $item->getCreatedAt());
            $row++;
        }

        // Activar el ajuste de texto para todas las celdas de datos
        foreach (range('A', 'L') as $columnID) {
            $sheet->getStyle($columnID . '2:' . $columnID . ($row - 1))
                ->getAlignment()->setWrapText(true); // Ajusta el texto a la celda
        }

        // Estilo para los datos
        $dataStyle = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ];
        $sheet->getStyle("A2:L" . ($row - 1))->applyFromArray($dataStyle);

        // Escribir el archivo y devolver la respuesta
        $writer = new Xlsx($spreadsheet);
        $tempFile = tempnam(sys_get_temp_dir(), 'export_') . '.xlsx';
        $writer->save($tempFile);

        return $this->file($tempFile, 'datos_exportados.xlsx', ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }
}

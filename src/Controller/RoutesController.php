<?php

namespace App\Controller;

use App\Entity\AsConsultasProcedimientos;
use App\Repository\AsCie10Repository;
use App\Repository\AsConsultasProcedimientosRepository;
use App\Repository\AsCupsRepository;
use App\Repository\RipsTablaReferenciaCausaExternaV2Repository;
use App\Repository\RipsTablaReferenciaFinalidadConsultaV2Repository;
use App\Repository\RipsTablaReferenciaServicioRepository;
use App\Service\ValidationServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RoutesController extends AbstractController
{
    #[Route('/get-consults', name: 'get_as_consults', methods: ['GET'])]
    public function fetchData(
        AsConsultasProcedimientosRepository $procedimientos,
        Request $request,
    ): JsonResponse {
        $itemsPerPage = 10;
        $page = max(1, $request->query->getInt('page', 1));
        $offset = ($page - 1) * $itemsPerPage;

        // Capturar los valores de los filtros desde la solicitud
        $codigoCups = $request->query->get('code_cups', null);
        $descripcionCups = $request->query->get('desc_cups', null);

        // Modificar el repositorio para aplicar los filtros
        $paginator = $procedimientos->getConsultasPagination($offset, $itemsPerPage, $codigoCups, $descripcionCups);
        $totalCount = count($paginator);
        $totalPages = (int) ceil($totalCount / $itemsPerPage);

        // dd(iterator_to_array($paginator));
        $formattedData = [];
        foreach ($paginator as $item) {

            $type_diag = '';

            if ($item->getTipoDiagnostico() === '01') {
                $type_diag = 'Impresión Diágnostica';
            } else if ($item->getTipoDiagnostico() === '02') {
                $type_diag = 'Confirmado Nuevo';
            } else {
                $type_diag = 'Confirmado Repetido';
            }

            $formattedData[] = [
                'id' => $item->getId(),
                'code_cups' => $item->getCups()?->getCodigoCups() ?? "",
                'description_cups' => $item->getCups()?->getDescripcionCups() ?? "",
                'tipo_cita' => $item->getTipoCita() == "1" ? "Consulta" : "Procedimiento",
                'informe_oportunidad' => $item->isInformeOportunidad(),
                'diagnostico_defaults' => $item->getDiagnosticoDefaults()?->getCie10() . ': ' . $item->getDiagnosticoDefaults()?->getNombre() ?? "",
                'finalidad' => $item->getFinalidad()?->getCodigo() . ': ' . $item->getFinalidad()?->getNombre() ?? "",
                'causa_externa' => $item->getCausaExterna()?->getCodigo() . ': ' . $item->getCausaExterna()?->getNombre() ?? "",
                'servicio_rips_code' => $item->getServicioRipsCode()?->getCodigo() . ': ' . ($item->getServicioRipsCode()?->getNombre() ?? "") ?? "",
                'tipo_diagnostico' => $type_diag,
                'created_by' => $item->getCreatedBy(),
                'created_at' => $item->getCreatedAt()?->format('d/m/Y') ?? ""
            ];
        }

        // Respuesta en JSON
        return new JsonResponse([
            'data' => $formattedData,
            'totalCount' => $totalCount,
            'totalPages' => $totalPages,
            'offset' => $offset,
            'page' => $page,
            'itemsPerPage' => $itemsPerPage,
        ]);
    }

    #[Route('/get-consult/{id}', name: 'get_as_consult_by_id', methods: ['GET'])]
    public function edit(int $id, AsConsultasProcedimientosRepository $consult): Response
    {
        // Buscar el registro por ID
        $result_consult = $consult->find($id);

        if (!$result_consult) {
            return $this->json([
                'errors' => ['message' => 'No se encontraron resultados con el id ' . $id],
                JsonResponse::HTTP_NOT_FOUND
            ]);
        }

        // Retornar los datos de la consulta en formato JSON para el modal
        return $this->json([
            'success' => true,
            'cups' => $result_consult->getCups()->getId(),
            'tipo_cita' => $result_consult->getTipoServicio(),
            'servicio' => $result_consult->getServicioRipsCode()->getCodigo(),
            'grupo' => $result_consult->getServicioRipsCode()->getGrupoCodigo(),
            'diag' => $result_consult->getDiagnosticoDefaults()->getId(),
            'tipo_diag' => $result_consult->getTipoDiagnostico(),
            'causa_externa' => $result_consult->getCausaExterna()->getCodigo(),
            'finalidad' => $result_consult->getFinalidad()->getCodigo(),
            'informe' => $result_consult->isInformeOportunidad()
        ]);
    }

    #[Route('/create-consult', name: 'create_as_consult', methods: ['POST'])]
    public function createAsConsultasProcedimientos(
        Request $request,
        ValidationServices $validationService,
        AsCupsRepository $asCupsRepository,
        AsCie10Repository $asCie10Repository,
        RipsTablaReferenciaFinalidadConsultaV2Repository $finalidadRepository,
        RipsTablaReferenciaCausaExternaV2Repository $causaExternaRepository,
        RipsTablaReferenciaServicioRepository $servicioRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $data = $request->request->all();

        // Crear una nueva instancia de la entidad
        $asConsultas = new AsConsultasProcedimientos();

        // Mapeo de las relaciones y sus respectivos repositorios
        $relations = [
            'cups' => [$asCupsRepository, 'setCups'],
            'diagnostico_defaults' => [$asCie10Repository, 'setDiagnosticoDefaults'],
            'finalidad' => [$finalidadRepository, 'setFinalidad'],
            'causa_externa' => [$causaExternaRepository, 'setCausaExterna'],
            'servicio_rips_code' => [$servicioRepository, 'setServicioRipsCode'],
        ];

        // Asignar los campos no relacionados (campos simples)
        $data['informe_oportunidad'] = $data['informe_oportunidad'] == 'true' ? true : false;
        $data['created_by'] = 1;
        $data['tipo_servicio'] = "1";

        $simpleFields = [
            'tipo_servicio' => 'setTipoServicio',
            'informe_oportunidad' => 'setInformeOportunidad',
            'tipo_cita' => 'setTipoCita',
            'tipo_diagnostico' => 'setTipoDiagnostico',
            'created_by' => 'setCreatedBy'
        ];

        $result = $validationService->validateAndAssignRelations($asConsultas, $data, $relations, $simpleFields);

        if (isset($result['errors'])) {
            return $this->json($result);
        }
        // Persistir la entidad
        $entityManager->persist($asConsultas);
        $entityManager->flush();

        return $this->json(['message' => 'Consulta creada exitosamente.']);
    }

    #[Route('/update-consult/{id}', name: 'update_as_consult', methods: ['PATCH', 'POST'])]
    public function updateAsConsultasProcedimientos(
        int $id,
        Request $request,
        ValidationServices $validationService,
        AsCupsRepository $asCupsRepository,
        AsCie10Repository $asCie10Repository,
        RipsTablaReferenciaFinalidadConsultaV2Repository $finalidadRepository,
        RipsTablaReferenciaCausaExternaV2Repository $causaExternaRepository,
        RipsTablaReferenciaServicioRepository $servicioRepository,
        AsConsultasProcedimientosRepository $asConsultasRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        // Buscar la entidad existente
        $asConsultas = $asConsultasRepository->find($id);

        if (!$asConsultas) {
            return $this->json(['errors' => ['id' => "La consulta con ID $id no existe."]], 404);
        }

        // Obtener datos de la solicitud
        $data = $request->request->all();

        // Mapeo de las relaciones y sus respectivos repositorios
        $relations = [
            'cups' => [$asCupsRepository, 'setCups'],
            'diagnostico_defaults' => [$asCie10Repository, 'setDiagnosticoDefaults'],
            'finalidad' => [$finalidadRepository, 'setFinalidad'],
            'causa_externa' => [$causaExternaRepository, 'setCausaExterna'],
            'servicio_rips_code' => [$servicioRepository, 'setServicioRipsCode'],
        ];

        // Campos simples para asignar directamente
        $data['informe_oportunidad'] = isset($data['informe_oportunidad']) && $data['informe_oportunidad'] == 'true';

        $data['tipo_servicio'] = "1";
        $simpleFields = [
            'tipo_servicio' => 'setTipoServicio',
            'informe_oportunidad' => 'setInformeOportunidad',
            'tipo_cita' => 'setTipoCita',
            'tipo_diagnostico' => 'setTipoDiagnostico',
        ];

        // Validar y asignar los campos
        $result = $validationService->validateAndAssignRelations($asConsultas, $data, $relations, $simpleFields, $id);

        if (isset($result['errors'])) {
            return $this->json($result);
        }

        // Guardar los cambios en la base de datos
        $entityManager->persist($asConsultas);
        $entityManager->flush();

        return $this->json(['message' => 'Consulta actualizada exitosamente.']);
    }

    #[Route('/delete-consult/{id}', name: 'delete_as_consult', methods: ['DELETE'])]
    public function deleteAsConsultasProcedimientos(int $id, AsConsultasProcedimientosRepository $consultas, EntityManagerInterface $em): Response
    {
        $consult = $consultas->find($id);

        if ($consult) {
            $em->remove($consult);
            $em->flush();

            return new JsonResponse(['success' => true]);
        }

        return new JsonResponse(['success' => false, 'message' => 'Dato no encontrado'], 404);
    }

    public function typesValidation(Request $req, ValidatorInterface $validator)
    {
        // existen varias formas de validar un campo en synfony, escoger el adecuado depende del desarrollador
        // unas de las formas es utilizando las validaciones desde la entidad y para este caso se utiliza una forma llamada hydrate en la entidad

        // se obtienen todos los datos procesados por el formulario con el metodo Request
        $dataForm = $req->request->All();

        // se declara una nueva instancia de la entidad
        $asEntity = new AsConsultasProcedimientos();

        // se le pasa a la entidad los datos recolectados del req
        $asEntity->hydrate($dataForm);

        // se le pasa la entidad al metodo validator que se encarga de revisar si los campos del formulario cumplen con la entidad
        $errors = $validator->validate($asEntity);

        // se validad si hay errores en el resultado del validator
        if (count($errors) > 0) {
            return json_encode($errors);
        }

        return json_encode(['success' => true, 'message' => 'validado']);

        // la otra forma es la de setear los errores directamente con las Collections del validator

        $fields = new Collection([
            "fields" => [
                "cups" => new NotBlank([
                    'message' => 'El campo "cups" no puede estar vacío.',
                ]),
            ],
            "missingFieldsMessage" => "El campo {{ field }} es obligatorio.",
            "extraFieldsMessage" => "El campo {{ field }} no está permitido.",
        ]);

        // la diferencia entre este metodo y el otro es que aqui se le pasa dos argumentos a la función validator, 
        // la primera es la entidad y la segunda la coleccion
        $errorsData = $validator->validate($asEntity, $fields);

        // se valida y se obtiene los mensajes de error para su posterior tratamiento en el formulario
        if (count($errorsData) > 0) {
            $errors = [];
            foreach ($errorsData as $error) {
                $field = str_replace(['[', ']'], '', $error->getPropertyPath());
                $errors[$field][] = $error->getMessage();
            }

            $flashBag->add('errors', $errors);
            $flashBag->set('oldData', $data);

            // Renderizar el formulario nuevamente con errores
            return $this->redirectToRoute('index');
        }
    }
}

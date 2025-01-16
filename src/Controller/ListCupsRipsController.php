<?php

namespace App\Controller;

use App\Repository\AsCie10Repository;
use App\Repository\AsConsultasProcedimientosRepository;
use App\Repository\AsCupsRepository;
use App\Repository\RipsTablaReferenciaCausaExternaV2Repository;
use App\Repository\RipsTablaReferenciaFinalidadConsultaV2Repository;
use App\Repository\RipsTablaReferenciaServicioRepository;
use App\Service\ExportsServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class ListCupsRipsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(
        RipsTablaReferenciaServicioRepository $refServ,
    ): Response {

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

        return $this->render('cups-rips/cups-rips-view.html.twig', [
            'groupedData' => $groupedData,
        ]);
    }

    #[Route('/list-diagnostic', name: 'get_list_diagnostic', methods: ['GET'])]
    public function diagnosticoSuggestions(Request $request, AsCie10Repository $cie10Repository): JsonResponse
    {
        $search_parameter = $request->query->get('q', '');
        $id_parameter = $request->query->get('id', '');

        $results = $cie10Repository->findByQueryOrId($search_parameter, $id_parameter);

        $result_suggestions = array_map(function ($cie10) {
            return [
                'id' => $cie10->getId(),
                'codigo' => $cie10->getCie10(),
                'text' => $cie10->getNombre(),
            ];
        }, $results);

        return $this->json($result_suggestions);
    }

    #[Route('/list-external-cause', name: 'get_list_external_cause', methods: ['GET'])]
    public function causaExterna(Request $request, RipsTablaReferenciaCausaExternaV2Repository $causaRepository): JsonResponse
    {
        $search_parameter = $request->query->get('q', '');

        $results = $causaRepository->findByQuery($search_parameter);

        $result_cause = array_map(function ($cause) {
            return [
                'id' => $cause->getCodigo(),
                'text' => $cause->getNombre(),
            ];
        }, $results);

        return $this->json($result_cause);
    }

    #[Route('/list-finality', name: 'get_list_finality', methods: ['GET'])]
    public function finalidadData(Request $request, RipsTablaReferenciaFinalidadConsultaV2Repository $finalidadRepository): JsonResponse
    {
        $search_parameter = $request->query->get('q', '');

        $results = $finalidadRepository->findByCodeFinally($search_parameter);

        $result_finality = array_map(function ($finality) {
            return [
                'id' => $finality->getCodigo(),
                'text' => $finality->getNombre(),
            ];
        }, $results);

        return $this->json($result_finality);
    }

    #[Route('/list-cups', name: 'get_list_as_cups', methods: ['GET'])]
    public function cupsData(Request $request, AsCupsRepository $asCups): JsonResponse
    {
        $search_parameter = $request->query->get('q', '');
        $id_parameter = $request->query->get('id', '');

        $results = $asCups->findByCodeCups($search_parameter, $id_parameter);

        $result_cups = array_map(function ($as_cups) {
            return [
                'id' => $as_cups->getId(),
                'codigo' => $as_cups->getCodigoCups(),
                'text' => $as_cups->getDescripcionCups()
            ];
        }, $results);

        return $this->json($result_cups);
    }

    #[Route('/export', name: 'export_data', methods: ['GET'])]
    public function exportData(AsConsultasProcedimientosRepository $procedimientos): Response
    {
        $data = $procedimientos->findBy([], ['id' => 'DESC']); // Reemplaza con tu lógica para obtener los datos
        $export = new ExportsServices();
        $column = 1;

        $define_cells = [
            ['letter' => 'A', 'number' => $column, 'title' => 'ID', 'width' => 10],
            ['letter' => 'B', 'number' => $column, 'title' => 'Codigo Cups', 'width' => 20],
            ['letter' => 'C', 'number' => $column, 'title' => 'Descripción Cups', 'width' => 30],
            ['letter' => 'D', 'number' => $column, 'title' => 'Tipo', 'width' => 15],
            ['letter' => 'E', 'number' => $column, 'title' => 'Informe Oportunidad', 'width' => 20],
            ['letter' => 'F', 'number' => $column, 'title' => 'Diágnostico', 'width' => 30],
            ['letter' => 'G', 'number' => $column, 'title' => 'Finalidad', 'width' => 25],
            ['letter' => 'H', 'number' => $column, 'title' => 'Causa Externa', 'width' => 25],
            ['letter' => 'I', 'number' => $column, 'title' => 'Codigo Servicio Rips', 'width' => 20],
            ['letter' => 'J', 'number' => $column, 'title' => 'Tipo Diágnostico', 'width' => 20],
            ['letter' => 'K', 'number' => $column, 'title' => 'Creado Por', 'width' => 15],
            ['letter' => 'L', 'number' => $column, 'title' => 'Creado En', 'width' => 20],
        ];

        $define_data = [];

        foreach ($data as $cl => $item) {

            if ($item->getTipoServicio() == '01') {
                $tipoServ = 'Impresión diagnóstica';
            } else if ($item->getTipoServicio() == '02') {
                $tipoServ = 'Confirmado nuevo';
            } else {
                $tipoServ = 'Confirmado repetido';
            }

            $define_data[$cl][] = $item->getId();
            $define_data[$cl][] = $item->getCups()->getCodigoCups();
            $define_data[$cl][] = $item->getCups()->getDescripcionCups();
            $define_data[$cl][] = $item->getTipoServicio() === 1 ? 'Consulta' : 'Procedimiento';
            $define_data[$cl][] = $item->isInformeOportunidad();
            $define_data[$cl][] = $item->getDiagnosticoDefaults()->getCie10() . ': ' . $item->getDiagnosticoDefaults()->getNombre();
            $define_data[$cl][] = $item->getFinalidad()->getCodigo() . ': ' . $item->getFinalidad()->getNombre();
            $define_data[$cl][] = $item->getCausaExterna()->getCodigo() . ': ' . $item->getCausaExterna()->getNombre();
            $define_data[$cl][] = $item->getServicioRipsCode()->getCodigo() . ': ' . $item->getServicioRipsCode()->getNombre();
            $define_data[$cl][] = $tipoServ;
            $define_data[$cl][] = $item->getCreatedBy();
            $define_data[$cl][] = $item->getCreatedAt()->format('d/m/Y');
        }

        $tempFile = $export->exportDocumentExcel($define_cells, $define_data);

        return $this->file($tempFile, 'datos_exportados.xlsx', ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }
}

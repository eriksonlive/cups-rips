<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ListCupsRipsController::index'], null, null, null, false, false, null]],
        '/list-diagnostic' => [[['_route' => 'get_list_diagnostic', '_controller' => 'App\\Controller\\ListCupsRipsController::diagnosticoSuggestions'], null, ['GET' => 0], null, false, false, null]],
        '/list-external-cause' => [[['_route' => 'get_list_external_cause', '_controller' => 'App\\Controller\\ListCupsRipsController::causaExterna'], null, ['GET' => 0], null, false, false, null]],
        '/list-finality' => [[['_route' => 'get_list_finality', '_controller' => 'App\\Controller\\ListCupsRipsController::finalidadData'], null, ['GET' => 0], null, false, false, null]],
        '/list-cups' => [[['_route' => 'get_list_as_cups', '_controller' => 'App\\Controller\\ListCupsRipsController::cupsData'], null, ['GET' => 0], null, false, false, null]],
        '/export' => [[['_route' => 'export_data', '_controller' => 'App\\Controller\\ListCupsRipsController::exportData'], null, ['GET' => 0], null, false, false, null]],
        '/get-consults' => [[['_route' => 'get_as_consults', '_controller' => 'App\\Controller\\RoutesController::fetchData'], null, ['GET' => 0], null, false, false, null]],
        '/create-consult' => [[['_route' => 'create_as_consult', '_controller' => 'App\\Controller\\RoutesController::createAsConsultasProcedimientos'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/get\\-consult/([^/]++)(*:29)'
                .'|/update\\-consult/([^/]++)(*:61)'
                .'|/delete\\-consult/([^/]++)(*:93)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'get_as_consult_by_id', '_controller' => 'App\\Controller\\RoutesController::edit'], ['id'], ['GET' => 0], null, false, true, null]],
        61 => [[['_route' => 'update_as_consult', '_controller' => 'App\\Controller\\RoutesController::updateAsConsultasProcedimientos'], ['id'], ['PATCH' => 0, 'POST' => 1], null, false, true, null]],
        93 => [
            [['_route' => 'delete_as_consult', '_controller' => 'App\\Controller\\RoutesController::deleteAsConsultasProcedimientos'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

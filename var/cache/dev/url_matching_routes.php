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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/get\\-consult/([^/]++)(*:29)'
                .'|/update\\-consult/([^/]++)(*:61)'
                .'|/delete\\-consult/([^/]++)(*:93)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:131)'
                    .'|wdt/([^/]++)(*:151)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:197)'
                            .'|router(*:211)'
                            .'|exception(?'
                                .'|(*:231)'
                                .'|\\.css(*:244)'
                            .')'
                        .')'
                        .'|(*:254)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'get_as_consult_by_id', '_controller' => 'App\\Controller\\RoutesController::edit'], ['id'], ['GET' => 0], null, false, true, null]],
        61 => [[['_route' => 'update_as_consult', '_controller' => 'App\\Controller\\RoutesController::updateAsConsultasProcedimientos'], ['id'], ['PATCH' => 0, 'POST' => 1], null, false, true, null]],
        93 => [[['_route' => 'delete_as_consult', '_controller' => 'App\\Controller\\RoutesController::deleteAsConsultasProcedimientos'], ['id'], ['DELETE' => 0], null, false, true, null]],
        131 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        151 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        211 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        231 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        244 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        254 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

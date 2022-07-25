<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/rncp' => [[['_route' => 'app_admin_rncp_index', '_controller' => 'App\\Controller\\AdminRncpController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/rncp/new' => [[['_route' => 'app_admin_rncp_new', '_controller' => 'App\\Controller\\AdminRncpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/rncp/([^/]++)(?'
                    .'|(*:30)'
                    .'|/edit(*:42)'
                    .'|(*:49)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:88)'
                    .'|wdt/([^/]++)(*:107)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:153)'
                            .'|router(*:167)'
                            .'|exception(?'
                                .'|(*:187)'
                                .'|\\.css(*:200)'
                            .')'
                        .')'
                        .'|(*:210)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_admin_rncp_show', '_controller' => 'App\\Controller\\AdminRncpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'app_admin_rncp_edit', '_controller' => 'App\\Controller\\AdminRncpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        49 => [[['_route' => 'app_admin_rncp_delete', '_controller' => 'App\\Controller\\AdminRncpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        88 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        107 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        153 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        167 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        187 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        200 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        210 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

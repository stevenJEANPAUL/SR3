<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/formation' => [[['_route' => 'app_admin_formation_index', '_controller' => 'App\\Controller\\AdminFormationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/formation/new' => [[['_route' => 'app_admin_formation_new', '_controller' => 'App\\Controller\\AdminFormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|formation/([^/]++)(?'
                        .'|(*:38)'
                        .'|/edit(*:50)'
                        .'|(*:57)'
                    .')'
                    .'|rncp/([^/]++)(?'
                        .'|(*:81)'
                        .'|/edit(*:93)'
                        .'|(*:100)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:141)'
                    .'|wdt/([^/]++)(*:161)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:207)'
                            .'|router(*:221)'
                            .'|exception(?'
                                .'|(*:241)'
                                .'|\\.css(*:254)'
                            .')'
                        .')'
                        .'|(*:264)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_admin_formation_show', '_controller' => 'App\\Controller\\AdminFormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'app_admin_formation_edit', '_controller' => 'App\\Controller\\AdminFormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [[['_route' => 'app_admin_formation_delete', '_controller' => 'App\\Controller\\AdminFormationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        81 => [[['_route' => 'app_admin_rncp_show', '_controller' => 'App\\Controller\\AdminRncpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_admin_rncp_edit', '_controller' => 'App\\Controller\\AdminRncpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_admin_rncp_delete', '_controller' => 'App\\Controller\\AdminRncpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        141 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        161 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        221 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        241 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        254 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        264 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

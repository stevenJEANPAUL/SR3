<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/rncp' => [[['_route' => 'app_admin_rncp_index', '_controller' => 'App\\Controller\\AdminRncpController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/rncp/new' => [[['_route' => 'app_admin_rncp_new', '_controller' => 'App\\Controller\\AdminRncpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_admin_user_new', '_controller' => 'App\\Controller\\AdminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|rncp/([^/]++)(?'
                        .'|(*:33)'
                        .'|/edit(*:45)'
                        .'|(*:52)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:76)'
                        .'|/edit(*:88)'
                        .'|(*:95)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:135)'
                    .'|wdt/([^/]++)(*:155)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:201)'
                            .'|router(*:215)'
                            .'|exception(?'
                                .'|(*:235)'
                                .'|\\.css(*:248)'
                            .')'
                        .')'
                        .'|(*:258)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_admin_rncp_show', '_controller' => 'App\\Controller\\AdminRncpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_admin_rncp_edit', '_controller' => 'App\\Controller\\AdminRncpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_admin_rncp_delete', '_controller' => 'App\\Controller\\AdminRncpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        88 => [[['_route' => 'app_admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        95 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        135 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        155 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        215 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        235 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        248 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        258 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fournisseur' => [[['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel/afficher' => [[['_route' => 'app_materiel_controller_back_index', '_controller' => 'App\\Controller\\MaterielControllerBackController::affichage'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_controller_back_new', '_controller' => 'App\\Controller\\MaterielControllerBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel/show' => [[['_route' => 'app_materiel_controller_back_show', '_controller' => 'App\\Controller\\MaterielControllerBackController::show'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:31)'
                    .'|/edit(*:43)'
                    .'|(*:50)'
                .')'
                .'|/materiel/([^/]++)(?'
                    .'|/edit(*:84)'
                    .'|(*:91)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:130)'
                    .'|wdt/([^/]++)(*:150)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:196)'
                            .'|router(*:210)'
                            .'|exception(?'
                                .'|(*:230)'
                                .'|\\.css(*:243)'
                            .')'
                        .')'
                        .'|(*:253)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id_f'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id_f'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id_f'], ['POST' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_materiel_controller_back_edit', '_controller' => 'App\\Controller\\MaterielControllerBackController::edit'], ['id_mat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        91 => [[['_route' => 'app_materiel_controller_back_delete', '_controller' => 'App\\Controller\\MaterielControllerBackController::delete'], ['id_mat'], ['POST' => 0], null, false, true, null]],
        130 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        150 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        210 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        230 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        243 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        253 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

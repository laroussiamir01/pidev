<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/don/api' => [[['_route' => 'app_don_api', '_controller' => 'App\\Controller\\DonApiController::index'], null, null, null, false, false, null]],
        '/addDonJSON' => [[['_route' => 'addDonJSON', '_controller' => 'App\\Controller\\DonApiController::addDonJSON'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/getDon' => [[['_route' => 'getDon', '_controller' => 'App\\Controller\\DonApiController::getDon'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/don' => [[['_route' => 'app_don_index', '_controller' => 'App\\Controller\\DonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/don/new' => [[['_route' => 'app_don_new', '_controller' => 'App\\Controller\\DonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/addEventJSON' => [[['_route' => 'addEventJSON', '_controller' => 'App\\Controller\\EventApiController::addEventJSON'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/getEVent' => [[['_route' => 'getEVent', '_controller' => 'App\\Controller\\EventApiController::getEVent'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cr' => [[['_route' => 'create', '_controller' => 'App\\Controller\\EventApiController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, true, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/materiel' => [[['_route' => 'app_materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, null, null, true, false, null]],
        '/materiel/search' => [[['_route' => 'app_materiel_rech', '_controller' => 'App\\Controller\\MaterielController::search'], null, null, null, false, false, null]],
        '/materiel/front' => [[['_route' => 'app_materiel_front', '_controller' => 'App\\Controller\\MaterielController::affichageFront'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\StatController::stat'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'app_student', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, false, false, null]],
        '/student/add' => [[['_route' => 'student_add', '_controller' => 'App\\Controller\\StudentController::addStudent'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/users/search' => [[['_route' => 'app_users_rech', '_controller' => 'App\\Controller\\UsersController::search'], null, null, null, false, false, null]],
        '/users/search1' => [[['_route' => 'app_users_rech1', '_controller' => 'App\\Controller\\UsersController::search1'], null, null, null, false, false, null]],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/api' => [[['_route' => 'app_utilisateur_api', '_controller' => 'App\\Controller\\UtilisateurApiController::index'], null, null, null, false, false, null]],
        '/utilisateur/signup' => [[['_route' => 'app_register_api', '_controller' => 'App\\Controller\\UtilisateurApiController::signupAction'], null, null, null, false, false, null]],
        '/utilisateur/signin' => [[['_route' => 'app_signin_api', '_controller' => 'App\\Controller\\UtilisateurApiController::signinAction'], null, null, null, false, false, null]],
        '/utilisateur/getPasswordByEmail' => [[['_route' => 'app_mdp_api', '_controller' => 'App\\Controller\\UtilisateurApiController::getPassswordByEmail'], null, null, null, false, false, null]],
        '/utilisateur/edit' => [[['_route' => 'app_edit_api', '_controller' => 'App\\Controller\\UtilisateurApiController::editUser'], null, null, null, false, false, null]],
        '/utilisateur/delete' => [[['_route' => 'app_delete_api', '_controller' => 'App\\Controller\\UtilisateurApiController::deleteuser'], null, null, null, false, false, null]],
        '/utilisateur/display' => [[['_route' => 'app_display_api', '_controller' => 'App\\Controller\\UtilisateurApiController::alluserAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/front/donfront' => [[['_route' => 'app_donfront', '_controller' => 'App\\Controller\\FrontController::donfront'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/([^/]++)/edit(*:28)'
                    .'|i/([^/]++)(*:45)'
                .')'
                .'|/c(?'
                    .'|alendar/([^/]++)(?'
                        .'|(*:77)'
                        .'|/edit(*:89)'
                        .'|(*:96)'
                    .')'
                    .'|r/([^/]++)(?'
                        .'|(*:117)'
                    .')'
                .')'
                .'|/don/([^/]++)(?'
                    .'|(*:143)'
                    .'|/edit(*:156)'
                    .'|(*:164)'
                .')'
                .'|/event/([^/]++)(?'
                    .'|(*:191)'
                    .'|/(?'
                        .'|edit(*:207)'
                        .'|like(*:219)'
                    .')'
                    .'|(*:228)'
                .')'
                .'|/fournisseur/([^/]++)(?'
                    .'|(*:261)'
                    .'|/edit(*:274)'
                    .'|(*:282)'
                .')'
                .'|/materiel/([^/]++)(?'
                    .'|(*:312)'
                    .'|/edit(*:325)'
                    .'|(*:333)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:369)'
                        .'|/edit(*:382)'
                        .'|(*:390)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:432)'
                .')'
                .'|/user(?'
                    .'|/([^/]++)(?'
                        .'|(*:461)'
                        .'|/edit(*:474)'
                        .'|(*:482)'
                    .')'
                    .'|s/(?'
                        .'|([^/]++)(?'
                            .'|(*:507)'
                            .'|/edit(*:520)'
                            .'|(*:528)'
                        .')'
                        .'|block/([^/]++)(*:551)'
                        .'|unblock/([^/]++)(*:575)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:616)'
                    .'|wdt/([^/]++)(*:636)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:682)'
                            .'|router(*:696)'
                            .'|exception(?'
                                .'|(*:716)'
                                .'|\\.css(*:729)'
                            .')'
                        .')'
                        .'|(*:739)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        45 => [[['_route' => 'show', '_controller' => 'App\\Controller\\EventApiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        117 => [
            [['_route' => 'update', '_controller' => 'App\\Controller\\EventApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete', '_controller' => 'App\\Controller\\EventApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        143 => [[['_route' => 'app_don_show', '_controller' => 'App\\Controller\\DonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_don_edit', '_controller' => 'App\\Controller\\DonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        164 => [[['_route' => 'app_don_delete', '_controller' => 'App\\Controller\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        191 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'event_like', '_controller' => 'App\\Controller\\EventController::like'], ['id'], null, null, false, false, null]],
        228 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        261 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        312 => [[['_route' => 'app_materiel_show', '_controller' => 'App\\Controller\\MaterielController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        325 => [[['_route' => 'app_materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'app_materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        390 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        432 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        461 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        507 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        551 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UsersController::blockUser'], ['id'], null, null, false, true, null]],
        575 => [[['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UsersController::unblockUser'], ['id'], null, null, false, true, null]],
        616 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        636 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        682 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        696 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        716 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        729 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        739 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

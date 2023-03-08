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
        '/don' => [[['_route' => 'app_don_index', '_controller' => 'App\\Controller\\DonController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/don/new' => [[['_route' => 'app_don_new', '_controller' => 'App\\Controller\\DonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/getEVent' => [[['_route' => 'getEVent', '_controller' => 'App\\Controller\\EventApiController::myApi'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/addEventJSON' => [[['_route' => 'addEventJSON', '_controller' => 'App\\Controller\\EventApiController::addEventJSON'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/editEventJSON' => [[['_route' => 'editEventJSON', '_controller' => 'App\\Controller\\EventApiController::editEventJSON'], null, ['POST' => 0], null, false, false, null]],
        '/jsondelete' => [[['_route' => 'delete', '_controller' => 'App\\Controller\\EventApiController::deleteEventJSON'], null, ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, true, false, null]],
        '/front/eve' => [[['_route' => 'app_eve', '_controller' => 'App\\Controller\\FrontController::indexx'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\StatController::chartAction'], null, null, null, false, false, null]],
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
                .'|/api/([^/]++)/edit(*:25)'
                .'|/calendar/([^/]++)(?'
                    .'|(*:53)'
                    .'|/edit(*:65)'
                    .'|(*:72)'
                .')'
                .'|/don/([^/]++)(?'
                    .'|(*:96)'
                    .'|/edit(*:108)'
                    .'|(*:116)'
                .')'
                .'|/event/([^/]++)(?'
                    .'|(*:143)'
                    .'|/(?'
                        .'|edit(*:159)'
                        .'|like(*:171)'
                    .')'
                    .'|(*:180)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:216)'
                        .'|/edit(*:229)'
                        .'|(*:237)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:279)'
                .')'
                .'|/user(?'
                    .'|/([^/]++)(?'
                        .'|(*:308)'
                        .'|/edit(*:321)'
                        .'|(*:329)'
                    .')'
                    .'|s/(?'
                        .'|([^/]++)(?'
                            .'|(*:354)'
                            .'|/edit(*:367)'
                            .'|(*:375)'
                        .')'
                        .'|block/([^/]++)(*:398)'
                        .'|unblock/([^/]++)(*:422)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:463)'
                    .'|wdt/([^/]++)(*:483)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:529)'
                            .'|router(*:543)'
                            .'|exception(?'
                                .'|(*:563)'
                                .'|\\.css(*:576)'
                            .')'
                        .')'
                        .'|(*:586)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        53 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        65 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        72 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        96 => [[['_route' => 'app_don_show', '_controller' => 'App\\Controller\\DonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        108 => [[['_route' => 'app_don_edit', '_controller' => 'App\\Controller\\DonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        116 => [[['_route' => 'app_don_delete', '_controller' => 'App\\Controller\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        143 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        159 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        171 => [[['_route' => 'event_like', '_controller' => 'App\\Controller\\EventController::likeToggle'], ['id'], null, null, false, false, null]],
        180 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        308 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        354 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        375 => [[['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        398 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\UsersController::blockUser'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'unblock_user', '_controller' => 'App\\Controller\\UsersController::unblockUser'], ['id'], null, null, false, true, null]],
        463 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        483 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        529 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        543 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        563 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        576 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        586 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

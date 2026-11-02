<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/admin/api/stats' => [[['_route' => 'admin_api_stats', '_controller' => 'App\\Controller\\Admin\\ApiController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/track' => [[['_route' => 'admin_track_index', '_controller' => 'App\\Controller\\Admin\\TrackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/liked-songs' => [[['_route' => 'app_liked_songs', '_controller' => 'App\\Controller\\LikedSongsController::index'], null, null, null, false, false, null]],
        '/playlist' => [[['_route' => 'app_playlist_index', '_controller' => 'App\\Controller\\PlaylistController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/track' => [[['_route' => 'app_track_index', '_controller' => 'App\\Controller\\TrackController::index'], null, ['GET' => 0], null, false, false, null]],
        '/track/suggest' => [[['_route' => 'app_track_suggest', '_controller' => 'App\\Controller\\TrackController::suggest'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|api/track/(\\d+)/approve(*:40)'
                    .'|track/(?'
                        .'|(\\d+)/edit(*:66)'
                        .'|(\\d+)/delete(*:85)'
                    .')'
                    .'|user/(?'
                        .'|(\\d+)/toggle\\-ban(*:118)'
                        .'|(\\d+)/role(*:136)'
                    .')'
                .')'
                .'|/playlist/(?'
                    .'|(\\d+)(*:164)'
                    .'|(\\d+)/delete(*:184)'
                    .'|add\\-track/(\\d+)(*:208)'
                    .'|(\\d+)/remove\\-track/(\\d+)(*:241)'
                .')'
                .'|/track/(\\d+)/like(*:267)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'admin_api_track_approve', '_controller' => 'App\\Controller\\Admin\\ApiController::approveTrack'], ['id'], ['POST' => 0], null, false, false, null]],
        66 => [[['_route' => 'admin_track_edit', '_controller' => 'App\\Controller\\Admin\\TrackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [[['_route' => 'admin_track_delete', '_controller' => 'App\\Controller\\Admin\\TrackController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        118 => [[['_route' => 'admin_user_toggle_ban', '_controller' => 'App\\Controller\\Admin\\UserController::toggleBan'], ['id'], ['POST' => 0], null, false, false, null]],
        136 => [[['_route' => 'admin_user_role', '_controller' => 'App\\Controller\\Admin\\UserController::changeRole'], ['id'], ['POST' => 0], null, false, false, null]],
        164 => [[['_route' => 'app_playlist_show', '_controller' => 'App\\Controller\\PlaylistController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        184 => [[['_route' => 'app_playlist_delete', '_controller' => 'App\\Controller\\PlaylistController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        208 => [[['_route' => 'app_playlist_add_track', '_controller' => 'App\\Controller\\PlaylistController::addTrack'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_playlist_remove_track', '_controller' => 'App\\Controller\\PlaylistController::removeTrack'], ['id', 'trackId'], ['POST' => 0], null, false, true, null]],
        267 => [
            [['_route' => 'app_track_like', '_controller' => 'App\\Controller\\TrackController::like'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

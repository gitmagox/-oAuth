<?php

return [

    /*
    |--------------------------------------------------------------------------
    | callback 
    |--------------------------------------------------------------------------
    |
    | 'url'=>'Controller@method', Get code from the OAuth authentication server
    | 
    | If you have the configuration userinfo, you retrieve user information directly from the callback
    |
    */

    'callback' => [
        'url'  => '',
    ],
    /*
    |--------------------------------------------------------------------------
    | OAuth API Configs
    |--------------------------------------------------------------------------
    | 'app_key'       => '', 
    | 'app_secret'    => '',
    | 'callback'      => '',
    |
    */
    'api'   => [

        'qq' => [
            'app_key'       => '', 
            'app_secret'    => '', 
            'callback'      => '',
        ],

    ],


];

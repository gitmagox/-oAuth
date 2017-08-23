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
        //qq
        'qq' => [
            'app_key'       => '', 
            'app_secret'    => '', 
            'callback'      => '',

            'api_map'       =>[
                "get_user_info" => [
                        "https://graph.qq.com/user/get_user_info",
                        ["format" => "json"],
                        "GET"
                    ],
                ]
            ],
        ],
        //github
        'github' => [
            'app_key'       => '', 
            'app_secret'    => '', 
            'callback'      => '',

            'api_map'       =>[
                
            ],
        ],
        //新浪微博
        'github' => [
            'app_key'       => '', 
            'app_secret'    => '', 
            'callback'      => '',

            'api_map'       =>[
                
            ],
        ],
        //新浪微博
        'google' => [
            'app_key'       => '', 
            'app_secret'    => '', 
            'callback'      => '',

            'api_map'       =>[
                
            ],
        ],

    ],


];

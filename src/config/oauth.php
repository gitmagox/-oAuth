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

            'api_map'       =>[
                    /*                       qzone                    */
                "add_blog" => [
                    "https://graph.qq.com/blog/add_one_blog",
                    ["title", "format" => "json", "content" => null),
                    "POST"
                ],
                "add_topic" => [
                    "https://graph.qq.com/shuoshuo/add_topic",
                    ["richtype","richval","con","#lbs_nm","#lbs_x","#lbs_y","format" => "json", "#third_source"),
                    "POST"
                ),
                "get_user_info" => [
                    "https://graph.qq.com/user/get_user_info",
                    ["format" => "json"],
                    "GET"
                ],
                "add_one_blog" => [
                    "https://graph.qq.com/blog/add_one_blog",
                    ["title", "content", "format" => "json"],
                    "GET"
                ),
                "add_album" => [
                    "https://graph.qq.com/photo/add_album",
                    ["albumname", "#albumdesc", "#priv", "format" => "json"],
                    "POST"
                ),
                "upload_pic" => [
                    "https://graph.qq.com/photo/upload_pic",
                    ["picture", "#photodesc", "#title", "#albumid", "#mobile", "#x", "#y", "#needfeed", "#successnum", "#picnum", "format" => "json"],
                    "POST"
                ],
                "list_album" => [
                    "https://graph.qq.com/photo/list_album",
                    ["format" => "json"]
                ],
                "add_share" => [
                    "https://graph.qq.com/share/add_share",
                    ["title", "url", "#comment","#summary","#images","format" => "json","#type","#playurl","#nswb","site","fromurl"],
                    "POST"
                ],
                "check_page_fans" => [
                    "https://graph.qq.com/user/check_page_fans",
                    ["page_id" => "314416946","format" => "json"]
                ],
                /*                    wblog                             */

                "add_t" => [
                    "https://graph.qq.com/t/add_t",
                    ["format" => "json", "content","#clientip","#longitude","#compatibleflag"],
                    "POST"
                ],
                "add_pic_t" => [
                    "https://graph.qq.com/t/add_pic_t",
                    [("content", "pic", "format" => "json", "#clientip", "#longitude", "#latitude", "#syncflag", "#compatiblefalg"],
                    "POST"
                ],
                "del_t" => [
                    "https://graph.qq.com/t/del_t",
                    ["id", "format" => "json"],
                    "POST"
                ],
                "get_repost_list" => [
                    "https://graph.qq.com/t/get_repost_list",
                    ["flag", "rootid", "pageflag", "pagetime", "reqnum", "twitterid", "format" => "json"]
                ],
                "get_info" => [
                    "https://graph.qq.com/user/get_info",
                    ["format" => "json"]
                ],
                "get_other_info" => [
                    "https://graph.qq.com/user/get_other_info",
                    ["format" => "json", "#name", "fopenid"]
                ],
                "get_fanslist" => [
                    "https://graph.qq.com/relation/get_fanslist",
                    ["format" => "json", "reqnum", "startindex", "#mode", "#install", "#sex"]
                ],
                "get_idollist" => [
                    "https://graph.qq.com/relation/get_idollist",
                    ["format" => "json", "reqnum", "startindex", "#mode", "#install"]
                ],
                "add_idol" => [
                    "https://graph.qq.com/relation/add_idol",
                    ["format" => "json", "#name-1", "#fopenids-1"],
                    "POST"
                ],
                "del_idol" => [
                    "https://graph.qq.com/relation/del_idol",
                    ["format" => "json", "#name-1", "#fopenid-1"],
                    "POST"
                ],
                /*                           pay                          */

                "get_tenpay_addr" => [
                    "https://graph.qq.com/cft_info/get_tenpay_addr",
                    ["ver" => 1,"limit" => 5,"offset" => 0,"format" => "json"]
                ]
            ],
        ],

    ],


];

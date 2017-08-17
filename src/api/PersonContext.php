<?php
namespace Magox\OAuth\Api;

class PersonContext{
    //当前策略
    static private $_strategy = null;
    /**
     * 设置环境
     */
    static function setTravelStrategy(Oauth $object,Request $request){
        return self::$_strategy = $object;
    }
    /**
     * 执行策略
     */
    static function call($api, $param = '', $method = 'GET', $multi = false){
        return self::$_strategy ->call($api, $param, $method, $multi);
    }
    static function getAccessToken($code, $extend = null)
    {
        if($request->input('tencent'))
        {
            $extend = array('openid' => $request->input('openid'), 'openkey' => $request->input('openkey'));
        }
        return self::$_strategy ->getAccessToken($code,$extend);
    };
    static function getUserInfo($token)
    {
        return self::$_strategy->getUserInfo($token);
    }
}
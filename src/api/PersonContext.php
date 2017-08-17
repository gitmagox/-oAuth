<?php
namespace Magox\OAuth\Api;

class PersonContext{
    //当前策略
    static private $_strategy = null;
    /**
     * 设置环境
     */
    static function setTravelStrategy(Oauth $object){
        return self::$_strategy = $object;
    }
    /**
     * 执行策略
     */
    static function call($api, $param = '', $method = 'GET', $multi = false){
        return self::$_strategy ->call($api, $param, $method, $multi);
    }
}
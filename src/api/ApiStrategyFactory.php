<?php
namespace Magox\OAuth\Api;
class ApiStrategyFactory
{
    //生产命名空间
    static $namespace = '';
    //注册API
    static $grid_class = [
        'qq'=>'QqOauth',
    ];
    static function produce($type, $token = null){
        $modle = self::$grid_class[ucfirst(strtolower($type))];
        if(isset($modle)){
            $modle = self::$namespace.$modle;
            return new $modle($grid,$request);
        }
    }
}
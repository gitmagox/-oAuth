<?php
namespace Magox\OAuth\Api;
class GridStrategyFactory
{
    //生产命名空间
    static $namespace = '';
    //注册Grid工厂模块
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
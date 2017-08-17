<?php
namespace Magox\OAuth\Callback;

use Magox\OAuth\Api\PersonContext;
use Magox\OAuth\Api\ApiStrategyFactory;
use App\Http\Controllers\Controller;

class CallbackController extends Controller{

    public function oauth(){
        $type=$this->request->input('type');
        $code=$this->request->input('code');
        
        PersonContext::setTravelStrategy(  
            ApiStrategyFactory::produce($type) 
        );
        //取token
        $token = PersonContext::getAccessToken($code);
        //获取当前登录用户信息
        if(is_array($token)){
            // 获取第三方账号数据
            $user_info = PersonContext::getUserInfo($token);
            //处理用户信息
            
        }
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/17
 * Time: 17:15
 */

namespace app\index\controller;
use think\Controller;

class UserInfo extends Controller
{


   protected $beforeActionList=[
            'one',
       //不想让index使用这个two方法
            'two'=>['except'=>"index"],
       //只想让index使用three方法
            'three'=>['only'=>'index'],
   ];

    public  function one(){
        echo "one<br/>";
    }

    public function two(){
        echo  "two<br/>";
    }
    public function three(){
        echo "three<br/>";
    }
    public function index(){
        return "你好这个是UserInfo下的index方法";
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/18
 * Time: 11:09
 */

namespace app\index\controller;
use think\Controller;
use think\View;
class Goods extends Controller
{
    public function index(){
        return "我是前台Goods控制器嗲的方法";
    }
    public function jiazai(){
        return View();
    }
    public function jiazai1(){
        $View=new View();
        return $View->fetch();
    }
    public function jiazai2(){
        return $this->fetch();
    }

}
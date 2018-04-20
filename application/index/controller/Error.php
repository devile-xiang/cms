<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/18
 * Time: 10:53
 */

namespace app\index\controller;
use think\Controller;

class Error extends Controller
{
    public function index(){
        $this->redirect('index/index');
    }
    public function _empty(){
        $this->redirect('index/index');
    }

}
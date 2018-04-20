<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/18
 * Time: 9:46
 */

namespace app\index\controller;
use think\Controller;

class Login extends Controller
{
        public function index(){
            return view();
        }
        public function check(){
                echo $username=$_POST['username'];
                echo $pwd=$_POST['pwd'];

                //判断是否登陆成功
            if ($username=="admin" && $pwd=="123") {
                    //$this->success(提示跳转信息，跳转地址，用户自定义数据，跳转时间，header信息)
                    $this->success('跳转成功',url('Index/index'));
            }else{
                    $this->error('登陆失败',url('Login/index'));
            }
        }
        public function cdx(){
            $this->redirect('index/index',['id'=>100,'name'=>'adc']);
        }
        public function _empty(){
            $this->redirect('index/index');
        }

}
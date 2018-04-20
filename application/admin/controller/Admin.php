<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/16
 * Time: 9:01
 */

namespace app\admin\controller;
use think\Controller;
use think\Db;

class Admin extends Controller
{


    public function admin(){

//
//        $data=DB::table('think_user')->select();
//        //分配数据
//        $this->assign('data',$data);

//        return view();
        echo "这是后台控制器";
        return '这是后台控制器';



    }

}
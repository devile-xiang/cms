<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/17
 * Time: 16:20
 */

namespace app\index\controller;
use think\Url;

class Blog
{

    public function index(){
        dump(Url::build('index/index/index'));
        dump(Url::build('index/index/course/200'));
        dump(Url('index/index/course/200'));
        dump(Url('index/index/course/200#name',['id'=>10,'name'=>'张三李四']));
        //带锚点
        dump(Url('index/index/course/200#name',['id'=>10,'name'=>'张三李四']));
        //带锚点带域名
        dump(Url('index/index/course/200#name@blog',['id'=>10,'name'=>'张三李四']));

        //添加入口文件
        Url::root('/index.php');
        dump(Url('index/index/course/200#name@blog',['id'=>10,'name'=>'张三李四']));
        //隐藏入口文件
        Url::root('/');
        dump(Url('index/index/course/200#name@blog',['id'=>10,'name'=>'张三李四']));
        return "只是一个博客方法00";
    }
    public function geta(){
        echo "我是geta";
    }

}
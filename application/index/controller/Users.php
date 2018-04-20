<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/19
 * Time: 11:01
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\response\View;
use think\Route;
use think\Request;
class Users extends Controller
{
    public function index(){
        //查询首页数据
        $data=Db::query("select * from think_user");

        $this->assign("data",$data);
        return view();
    }
    public function create(){
        return View();
    }


    public function save(Request $request){
    //接收数据
        $data=input('post.');
        dump($data);
//        ['name'=>$data.name,'phone'=>$data.phone,'zhushi'=>$data.zs,'pwd'=>$data.pwd]"
        $code=Db::execute("insert into think_user value (null,:name,:phone,:zs,:pwd)",$data);

        //判断是否成功
        if ($code>=1){
            $this->success("添加成功",'/cms/public/index.php/user');
        }else{
            $this->error("添加失败",'');
        }
    }
    public function edit($id){
        $data=Db::query("select * from think_user where id=?",[$id]);
        dump($data);
        $this->assign("data",$data[0]);
        return view();
    }
    public function update(Request $request,$id){
            $data=Request::instance()->except('_method');
            dump($data);
            $code=Db::execute("update think_user set name=:name,pwd=:pwd,phone=:phone,zs=:zs where id=:id",$data);
            echo Db::getLastSql();

            if ($code>0){
                $this->success("修改成功",'/cms/public/index.php/user');
            }else{
                $this->error("修改失败",url());
            }
    }
    public function delete($id){
        $code=Db::execute("delete from think_user where id=$id");
        if($code>0){
            $this->success("删除成功",'/cms/public/index.php/user');
        }else{
            $this->error("删除失败",url());
        }
    }
    public function ajax_del(){
            $id=input("post.id/d");
            $code=Db::execute("delete from think_user where id =$id");
            if ($code>0){
                $data=[
                    'status'=>200,
                    'info'=>'删除成功',
                ];
            }else{
                $data=[
                    'status'=>400,
                    'info'=>'删除失败',
                ];
            }
            return $data;
    }

}
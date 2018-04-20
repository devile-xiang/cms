<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/16
 * Time: 10:38
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
class User extends Controller
{
    public function insert(){
        //返回影响行数
        $data=Db::execute("insert into think_user value(null,'xiangzong',18523555617,'你好我来自拉萨','12345645' )");
        dump($data);
        $data=Db::execute("insert into think_user value(null,?,?,?,? )",['xianghao',18523555619,'wolaizihainan','123654']);
        dump($data);
        $data=Db::execute("insert into think_user value(null,:name,:phone,:zs,:pwd )",['name'=>'xiangzong','phone'=>'18536523652','zs'=>'shahsa','pwd'=>'qq12345678']);
        dump($data);
    }
public function delete(){
        $data=Db::execute("delete from think_user where id =9");
        dump($data);
    $data=Db::execute("delete from think_user where id =?",[4]);
    dump($data);
    $data=Db::execute("delete from think_user where id >:id",['id'=>5]);
    dump($data);
}
public function update(){
        $data=Db::execute("update think_user set name ='liling' where id=1");
        dump($data);
    $data=Db::execute("update think_user set name =? where id=?",['wangxiao',1]);
    dump($data);
    $data=Db::execute("update think_user set name =:name where id=:id",['name'=>'xijingping','id'=>1]);
    dump($data);
}

    public  function select(){
        $data=Db::query("select* from think_user");
        dump($data);
        $data=Db::query("select * from think_user where id>=? and id<=?",[2,10]);
        dump($data);

    //获取最后执行的sql语句
        echo Db::getLastSql();
    }

}
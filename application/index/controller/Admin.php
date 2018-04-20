<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/20
 * Time: 11:55
 */

namespace app\index\controller;
use think\Controller;
use think\Db;
class Admin
{
   public function index(){
//       //查询所有数据
//       $data=Db::table("think_user")->select();
//       dump($data);
//       //查询一条数据
//       $data=Db::table("think_user")->find();
//       dump($data);
//       //获取最后执行的sql;
//       echo Db::getLastSql();
//
//
//       //查询所有数据,
//       $data=Db::name("think_user")->select();
//       dump($data);
//       //查询一条数据
//       $data=Db::name("think_user")->find();
//       dump($data);
//       //获取最后执行的sql;
//       echo Db::getLastSql();



//
//       //SELECT * FROM `think_user` WHERE `id` > 3
//       $data=Db::table("think_user")->where("id",">",3)->select();
//       echo Db::getLastSql();
//       //SELECT * FROM `think_user` WHERE ( `id` > 3 AND `id` < 19 )
//       $data=Db::table("think_user")->where("id",">",3)->where("id","<",19)->select();
//       echo Db::getLastSql();
//        //模糊查询匹配name包含aa的数据
//       //SELECT * FROM `think_user` WHERE `name` LIKE '%aa%'
//       $data=Db::table("think_user")->where("name","like","%aa%")->select();
//       echo Db::getLastSql();
//       dump($data);
//
//       //匹配密码是1，用户名是amdind的用户
//       //SELECT * FROM `think_user` WHERE `name` LIKE '%aa%'
//       $data=Db::table("think_user")->where("name","admin")->where("pwd","1")->select();
//       echo Db::getLastSql();
//       dump($data);

        //SELECT * FROM `think_user` WHERE `id` <= 10 OR `id` >= 20
//       $data=Db::table("think_user")->where("id","<=",10)->whereOr("id",">=",20)->select();
        //SELECT * FROM `think_user` WHERE `name` LIKE '%a%' OR `name` LIKE '%b%'
//       $data=Db::table("think_user")->where("name","like","%a%")->whereOr("name","like","%b%")->select();



       //截取数据
       //SELECT * FROM `think_user` LIMIT 2,6
       //$data=Db::table("think_user")->limit(2,6)->select();



        //根据id进行排序desc是倒叙
     //  $data=Db::table("think_user")->order("id","desc")->select();


        //查询id和name两个列
//       $data=Db::table("think_user")->field('id,name')->select();


       //用于分页查询，page(第几页，一页多少条数据)
//       $data=Db::table("think_user")->page(2,10)->select();



       //多表查询：
       $data=Db::query("select shangping.*,fl.name tname from fl,shangping where fl.id=shangping.fenlei");

//       SELECT `shangping`.*,fl.name tname FROM `shangping` INNER JOIN `fl` ON `fl`.`id`=`shangping`.`fenlei`
       $data=Db::table("shangping")->field("shangping.*,fl.name tname")->join("fl","fl.id=shangping.fenlei")->select();
        //右连接，以右表为主
       $data=Db::table("shangping")->field("shangping.*,fl.name tname")->join("fl","fl.id=shangping.fenlei","right")->select();
       //右连接，以左表为主
       $data=Db::table("shangping")->field("shangping.*,fl.name tname")->join("fl","fl.id=shangping.fenlei","left")->select();
    //设置别名  ->alias()
       $data=Db::table("shangping")->alias("s")->field("s.*,f.name tname")->join("fl f","f.id=s.fenlei")->select();



        echo  "最大值";
       $data=Db::table("think_user")->max("id");
       dump($data);
       echo "最小值";
       $data=Db::table("think_user")->min("id");
       dump($data);
       echo "平均值";
       $data=Db::table("think_user")->avg("id");
       dump($data);
       echo "统计数量";
       $data=Db::table("think_user")->count("id");
       dump($data);
       echo "获取总分";
       $data=Db::table("think_user")->sum("id");

       dump($data);

       echo Db::getLastsql();





   }

   public function insert(){
       //数字中的字段名 必须要和数据库中的字段名一致

       //出入一条数据
//       $data=[
//           'name'=>"zhangsan",
//           'phone'=>'18523555617',
//           'zs'=>'no',
//           'pwd'=>'123456'
//       ];

//       $code=Db::table("think_user")->insert($data);
//多条数据插入
//       $data=[
//          [
//              'name'=>"zhangsan",
//              'phone'=>'18523555617',
//              'zs'=>'no',
//              'pwd'=>'123456'
//          ],
//           [
//               'name'=>"lisi",
//               'phone'=>'1888888888',
//               'zs'=>'no',
//               'pwd'=>'1233333333456'
//           ]
//       ];
//        $code=Db::table("think_user")->insertAll($data);
//
//        dump($code);

        //插入并输出最后插入的id
//       $data=[
//           'name'=>"mr.li",
//           'phone'=>'18523555617',
//           'zs'=>'no',
//           'pwd'=>'123456'
//       ];
//       echo Db::table("think_user")->insertGetId($data);
//
//

//       出入一条数据
       $data=[
           'name'=>"zhangsan",
           'phone'=>'18523555617',
           'zs'=>'no',
           'pwd'=>'123456'
       ];

       $code=Db("think_user")->insert($data);
//多条数据插入
       $data=[
          [
              'name'=>"zhangsan",
              'phone'=>'18523555617',
              'zs'=>'no',
              'pwd'=>'123456'
          ],
           [
               'name'=>"lisi",
               'phone'=>'1888888888',
               'zs'=>'no',
               'pwd'=>'1233333333456'
           ]
       ];
        $code=Db("think_user")->insertAll($data);

        dump($code);

//       插入并输出最后插入的id
       $data=[
           'name'=>"mr.li",
           'phone'=>'18523555617',
           'zs'=>'no',
           'pwd'=>'123456'
       ];
       echo Db("think_user")->insertGetId($data);


}
public function update(){
//       $code=Db::table("think_user")->where("id",'1')->update(["name"=>"zuizuibang"]);
    //自增：
//    $code=Db::table("think_user")->where("id",1)->setInc("pwd");
    //自减
//        $code=Db::table("think_user")->where("id",1)->setDec("pwd");
    //自减10个数
    $code=Db::table("think_user")->where("id",1)->setDec("pwd",10);
        dump($code);



        //助手函数
    //       $code=("think_user")->where("id",'1')->update(["name"=>"zuizuibang"]);
    //自增：
//    $code=("think_user")->where("id",1)->setInc("pwd");
    //自减
//        $code=("think_user")->where("id",1)->setDec("pwd");
    //自减10个数
    $code=("think_user")->where("id",1)->setDec("pwd",10);
    dump($code);
}
public function delete(){
//       $code=Db::table("think_user")->where("id","1")->delete();

      //删除多条数据
//        $code=Db::table("think_user")->where("id in(1072,1073)")->delete();
    $code=Db::table("think_user")->where("id in(1072,1073)")->delete();
    //删除id为1074，1074
    $code=Db::table("think_user")->delete([1074,1074]);


    //删除区间数据
    $code=Db::table("think_user")->where("id>1075 and id <1077")->delete();


       echo Db::getLastSql();
       dump($code);
}

}
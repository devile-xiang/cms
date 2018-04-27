<?php
namespace app\index\controller;
//use app\index\controller\user;
use think\config;
use think\Model;
use think\Url;
use think\View;
use think\Controller;
use think\Request;
use app\admin\controller\Admin;
use think\Db;
use think\Loader;
use app\index\model\think_user;
use traits\model\SoftDelete;
class Index extends Controller
{
//   public function index(){
//
//       echo config('name');
//       echo config('age');
//       echo config('kouhao');
//        //通过系统类读取配置
//       //如果配置存在 直接输出 不存在返回NUll
//       echo \think\Config::get('name');
//       echo \think\config::get('abc');
//        echo dump(config::get('kouhao'));
//
//
//        dump(config('database'));
//   }
//
//   ///动态配置
//public function course(){
//       echo input('id');
//}
//public function shijian(){
//       echo input('year').'',input('month');
//}
//public function dongtai(){
//       echo input('a').' ============='.input('b');
//}
//public function test1(){
//       echo "我是测试方法";
//}
//public function test2(){
//       dump(input());
//    echo "我是测试方法2";
//}
//public function type(){
//
//       dump(input());
//
//       echo "我是要测试请求类型";
//       return view();
//}
//public function jiazai(){
//       $view=new View();
//       return $view->fetch();
//
//    return $this->fetch();
//
//
//       return view();
//}
//public function shuchu(){
//     //  return "输出";
//       $arr=array(
//           'name'=>'你好',
//           'age'=>18
//       );
//
//       return json_encode($arr);
//}
////控制初始化方法
//public function _initialize(){
//       echo "我是初始化方法";
//}
//public function index1( Request $request){
//   ///$request=request();
//    //使用Request类
////    $request=Request::instance();
////
////    dump($request);
//    //使用系统控制类获取请求信息
//    dump($request);
//
//}
//public function getUrl(Request $request){
//    echo 'domain: ' . $request->domain() . '<br/>';
//// 获取当前入口文件
//    echo 'file: ' . $request->baseFile() . '<br/>';
//// 获取当前URL地址 不含域名
//    echo 'url: ' . $request->url() . '<br/>';
//// 获取包含域名的完整URL地址
//    echo 'url with domain: ' . $request->url(true) . '<br/>';
//// 获取当前URL地址 不含QUERY_STRING
//    echo 'url without query: ' . $request->baseUrl() . '<br/>';
//// 获取URL访问的ROOT地址
//    echo 'root:' . $request->root() . '<br/>';
//// 获取URL访问的ROOT地址
//    echo 'root with domain: ' . $request->root(true) . '<br/>';
//// 获取URL地址中的PATH_INFO信息
//    echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
//// 获取URL地址中的PATH_INFO信息 不含后缀
//    echo 'pathinfo: ' . $request->path() . '<br/>';
//// 获取URL地址中的后缀信息
//    echo 'ext: ' . $request->ext() . '<br/>';
//}
//public function getinfo(Request $request){
//       //当前模块
//       dump($request->module());
//       //当前控制器
//       dump($request->controller());
//       //当前方法
//       dump($request->action());
//}
//public function gettype(Request $request){
//       dump($request->method());
//       dump($request->type());
//       dump($request->ip());
//       dump($request->isAjax());
//        dump($request->param());
//        dump($request->only('name'));
//        dump($request->except('id'));
//}
//public function a(){
//
//
//       return View();
//
//}
//public function getData(Request$request){
//       dump($request->has('id','get'));
//       dump(input('?get.id'));
//        dump(input('get.id'));
//        dump($request->get());
//}
//public function reg(){
//       return View();
//}
//public function guolv(Request $request){
//    $request->filter('strip_tags','htmlspecialchars');
//   $request->get('strip_tags','htmlspecialchars,md5');
//      dump($request->post());
//    //只要name
//    dump($request->only('name'));
//    //剔除name
//    dump($request->except('name'));
//}
//public function xiushi(Request $request){
//       dump(input('get.id/d'));//x强制转换整形
//        dump(input('get.name/s'));//强制转换成字符串
//    dump($request->get('id/d'));
//}
//public function xiugai(Request $request){
//       dump($request->get('id/d'));
//    dump($request->get(['id/d'=>20]));
//
//}
//public function type1(Request $request){
//     echo '是否get请求';
//    dump($request::instance()->isGet());
//    echo '是否post请求';
//    dump($request::instance()->post());
//    echo '是否是AJAx请求';
//    dump($request::instance()->isAjax());
//    echo '是否是手机访问';
//    dump($request::instance()->isMobile());
//    echo "请求方法";
//    dump($request->method());
//}
//public function mian(){
//       return view();
//}
//public function jintai(Request $request){
//        echo url('index/index');
//        dump($request->ext());
//}
//public function bangd( $id="123",$name="admin"){
////       dump(input('id'));
////        dump(input('name'));
//        dump($id);
//        dump($name);
//}
//public function data(){
//       $DB=new Db();
////        $data=$DB::table("think_user")->select();
//
//        $data=$DB::query("select * from think_user");
//        dump($data);
//}
//public function data1(){
//       echo "我是使用方法配置连接数据库";
////       $Db=Db::connect([
////           'type'=>'mysql',
////           'hostname'=>'127.0.0.1',
////           'database'=>'test',
////           'username'=>'root',
////           'password'=>'',
////           'hostport'=>'3306',
////           ]);
//
//    //字符集配置连接：数据库类型://用户名:密码@数据库地址:数据库端口/数据库名#字符集
//            $Db=Db::connect('mysql://root:@127.0.0.1:3306/test#utf8');
//
//
//           $data=$Db->table('think_user')->select();
//           dump($data);
//
//
//
//}
//public function data2(){
//       echo "使用模型连接数据库";
//       $user=new \app\index\model\User();
//       dump($user::all());
//}
//public function indexm(){
//       $user=new \app\index\model\think_user();
//       dump($user::get(1079)->toArray());
//}
//public function get1(){
//       //调用静态
//    //引入model位置use app\index\model\think_user;
//  // $res=think_user::get(1079);
//
//    //实例化模型
////        $think_user=new Think_user;
////        $res=$think_user::get(1079);
//
//
//    //使用Loader,这个不可用
//    //引入use think\Loader;
////    $think_user=Loader::model("thin_kuser");
////    $res=$think_user::get(1079);
////
////    dump($res->toArray());
//        //2018/4/24学习不可用
/////     助手函数
////    $user=Model("thin_kuser");
////    $res=$user::get(1079);
////     dump($res->toArray());
//}
//public function getOne(){
//       //查询id为1
////       $res=think_user::get(1);
//    //默认查找用户名
////    $res=think_user::get(["name"=>"mr.li"]);
//
//       //使用闭包
////    $res=think_user::get(function ($query){
////                $query->where("id",1);
////    });
//        //find查询
//    $res=think_user::where("id",1)->find();
//
//    dump($res->toArray());
//}
//public function getall(){
//    //查询全部
////       $res=think_user::all();
//    //查询name="asdsss"
////        $res=think_user::all(["name"=>"asdsss"]);
//    //闭包
////    $res=think_user::all(function($query){
////        $query->where("name","asdsss");
////    });
//    $res=think_user::select();
//
//
//
//    foreach ($res as $key=>$value){
//        dump($value->toArray());
//    }
//}
//public function getValue(){
//       //查询id为5数据的name
////       $res=think_user::where("id",5)->value("name");
//    //获取全部name
//    $res=think_user::column("name");
//       dump($res);
//}
////动态查询
//public function dong(){
//       //读取一条name为asdsss，getBy字段名
//       $res=think_user::getByname('asdsss');
//       dump($res->toArray());
//
//}
//public function add(){
//
//    $user=new think_user();
//    //设置属性
//////    $user->name=("wangxiao");
//////    $user->pwd=("123456");
//////    $user->zs=("wobuzhidaoshuosheme");
//////    $user->phone=("123456");
//////
/////
///// //通过data方法
////        $user->data([
////           "name"=>"wangzhengwen",
////           "pwd"=>"wangjile",
////           "zs"=>"buxiangshuoshenme",
////            "phone"=>"123456",
////        ]);
////        $user=new think_user([
////            "name"=>"lijiang",
////           "pwd"=>"wangjile",
////           "zs"=>"buxiangshuoshenme",
////            "phone"=>"123456",
////        ]);
////        dump($user->save());
////        echo $user->id;
//
//        //过滤掉数据库没有的字段，不添加如果数据库没有sex但是post提交上来的的有sex
//   // $user->allowField(true)->save();
//
//
//    $user=new think_user();
//    $list=[
//        ["name"=>"wangzhengwen","pwd"=>"wangjile", "zs"=>"buxiangshuoshenme","phone"=>"123456"],
//        ["name"=>"teliangpu","pwd"=>"wangjile", "zs"=>"buxiangshuoshenme","phone"=>"123456"],
//        ["name"=>"xijingping","pwd"=>"wangjile", "zs"=>"buxiangshuoshenme","phone"=>"123456"],
//        ["name"=>"pujing","pwd"=>"wangjile", "zs"=>"buxiangshuoshenme","phone"=>"123456"],
//    ];
//    $user->saveAll($list,false);
//}
//public function delete(){
////        $user=think_user::get(1);
//////        dump($user->toArray());
//////        //返回影响行数
//////        dump($user->delete());
/////
/////             删除id为2
//            $user=think_user::destroy(2);
//            //删除id为2，3，4
////    $user=think_user::destroy([2,3,4]);
//    $user=think_user::destroy(["name"=>"wangxiao"]);
//            dump($user);
//
//    $user::where('id','>',10)->delete();
//
//}
//public function update(){
////       //设置字段属性更新
////      $user=think_user::get(3);
////      $user->name="xiangzong";
//////      echo $user->id;
////      $user->save();
////直接数组修改
////    $user=new think_user();
////    $res=$user->save([
////        "name"=>"xinyedasha",
////        "pwd"=>"xianzaimeiyoumima",
////        "zs"=>"meiyouzhushi",
////
////    ],['id'=>3]);
////    dump($res);
////修改数据
////    $_POST['name']="xiangzong";
////    $_POST['pwd']="xiangzong";
////    $_POST['zs']="xiangzong";
////    $_POST['age']="xiangzong";
////    $_POST['name1']="xiangzong";
////
////    $user=new think_user();
////    //allowField(['name','pwd','zs']),过滤掉除name,pwd,zs，以外的的字段
////    $res=$user->allowField(['name','pwd','zs'])->save($_POST,['id'=>3]);
//    //同时更新多条数据
////    $data=[
////        ['id'=>3,'name'=>'jiangzong','pwd'=>'jiangzong','zs'=>'jiangzong'],
////        ['id'=>4,'name'=>'wangzong','pwd'=>'wangzong','zs'=>'wangzong'],
////    ];
////    $user=new think_user();
////    $res=$user->saveAll($data);
////    echo think_user::getlastsql();
//    //修改大于10的注释
////    $user=new think_user();
////
////    $res=$user->where("id",'>','10')->update(['zs'=>"zhegshidayu10dezhushi"]);
//    //闭包更新,修改大于10的名字为aoteman
//    $user=new think_user();
//    $user->save(['name'=>'aoteman'],function($query){
//        $query->where("id",'>','10');
//    });
//
//
//}
////数据统计
//public function tongji(){
////       $tot=think_user::count();
////       dump($tot);
////       //统计所有name等于asdsss的数据
////       $tot=think_user::where("name","=","asdsss")->count();
////       dump($tot);
//    //最大值
//    $max=think_user::max('id');
//    dump($max);
//    //最小值
//    $min=think_user::min('id');
//    dump($min);
//    //平均值
//    $avg=think_user::avg('id');
//    dump($avg);
//    //总和
//    $sum=think_user::sum('id');
//    dump($sum);
//
//}
//public function getSex(){
//       //获取id为3的数据
//    $user=think_user::get(3);
//    dump($user->toArray());
//}
//public function setpwd(){
//    //修改ID为3的密码：
//    $user=new think_user();
//    $res=$user->save(['pwd'=>"123456"],["id"=>3]);
//    dump($res);
//
//}
//    public function auto(){
//        $user=new think_user();
//        //修改数据
////        $res=$user->save(['name'=>'bangbangda5656'],['id'=>1111]);
//        //添加数据：
//        $res=$user->save(['name'=>'bangbangda5656','pwd'=>1111]);
//
////        echo md5('xiangzong232323');
//        dump($res);
//    }
//    public function ruan(){
//       //软删除
////      $res=think_user::destroy(1102);
//        //直接删除数据，不经过假删除
////        $res=think_user::destroy(1102,trur);
//        //获取数据
////        $res=think_user::get(1102);
//
//
//        //读取软删除的数据
//        $res=think_user::withTrashed()->find(1102);
//        $res=think_user::withTrashed()->select();
//
//        dump($res->toArray());
//    }
public function jiazai1(){
       //继承系统控制器类
//    return $this->fetch();

//    $name="向总";
//    $city="重庆";
//
//    $this->assign('name',$name);
//    $this->assign('city',$city);
//
//
//    return view();
//
//    $view=new View();
//    return $view->fetch();

//    对象赋值：
    $this->view->name="asd";
    $this->view->city="江北";
    return view();


}
public function xuanran(){
    //默认加载当前模块，当前控制器，当前方法对应的页面
//    return view();
    //加载指定页面
//加载到当前控制器下的reg页面
//    return $this->fetch('index/reg');
    //加载到users控制器下的index页面
//    return $this->fetch('users/index');


}
public function tags(){
    //分配字符串
    $this->assign("str","TP5非常简单");
    //分配数组
    $data=[
      'name'=>'向总',
        'age'=>18,
        'sex'=>'妖',

    ];
    $this->assign("data",$data);


    return view();
}
}

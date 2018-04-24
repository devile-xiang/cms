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
class Index extends Controller
{
   public function index(){

       echo config('name');
       echo config('age');
       echo config('kouhao');
        //通过系统类读取配置
       //如果配置存在 直接输出 不存在返回NUll
       echo \think\Config::get('name');
       echo \think\config::get('abc');
        echo dump(config::get('kouhao'));


        dump(config('database'));
   }

   ///动态配置
public function course(){
       echo input('id');
}
public function shijian(){
       echo input('year').'',input('month');
}
public function dongtai(){
       echo input('a').' ============='.input('b');
}
public function test1(){
       echo "我是测试方法";
}
public function test2(){
       dump(input());
    echo "我是测试方法2";
}


public function type(){

       dump(input());

       echo "我是要测试请求类型";
       return view();
}

public function jiazai(){
       $view=new View();
       return $view->fetch();

    return $this->fetch();


       return view();
}
public function shuchu(){
     //  return "输出";
       $arr=array(
           'name'=>'你好',
           'age'=>18
       );

       return json_encode($arr);
}
//控制初始化方法
public function _initialize(){
       echo "我是初始化方法";
}
public function index1( Request $request){
   ///$request=request();
    //使用Request类
//    $request=Request::instance();
//
//    dump($request);
    //使用系统控制类获取请求信息
    dump($request);

}
public function getUrl(Request $request){
    echo 'domain: ' . $request->domain() . '<br/>';
// 获取当前入口文件
    echo 'file: ' . $request->baseFile() . '<br/>';
// 获取当前URL地址 不含域名
    echo 'url: ' . $request->url() . '<br/>';
// 获取包含域名的完整URL地址
    echo 'url with domain: ' . $request->url(true) . '<br/>';
// 获取当前URL地址 不含QUERY_STRING
    echo 'url without query: ' . $request->baseUrl() . '<br/>';
// 获取URL访问的ROOT地址
    echo 'root:' . $request->root() . '<br/>';
// 获取URL访问的ROOT地址
    echo 'root with domain: ' . $request->root(true) . '<br/>';
// 获取URL地址中的PATH_INFO信息
    echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
// 获取URL地址中的PATH_INFO信息 不含后缀
    echo 'pathinfo: ' . $request->path() . '<br/>';
// 获取URL地址中的后缀信息
    echo 'ext: ' . $request->ext() . '<br/>';
}
public function getinfo(Request $request){
       //当前模块
       dump($request->module());
       //当前控制器
       dump($request->controller());
       //当前方法
       dump($request->action());
}
public function gettype(Request $request){
       dump($request->method());
       dump($request->type());
       dump($request->ip());
       dump($request->isAjax());
        dump($request->param());
        dump($request->only('name'));
        dump($request->except('id'));
}
public function a(){


       return View();

}
public function getData(Request$request){
       dump($request->has('id','get'));
       dump(input('?get.id'));
        dump(input('get.id'));
        dump($request->get());
}

public function reg(){
       return View();
}
public function guolv(Request $request){
    $request->filter('strip_tags','htmlspecialchars');
   $request->get('strip_tags','htmlspecialchars,md5');
      dump($request->post());
    //只要name
    dump($request->only('name'));
    //剔除name
    dump($request->except('name'));
}
public function xiushi(Request $request){
       dump(input('get.id/d'));//x强制转换整形
        dump(input('get.name/s'));//强制转换成字符串
    dump($request->get('id/d'));
}
public function xiugai(Request $request){
       dump($request->get('id/d'));
    dump($request->get(['id/d'=>20]));

}
public function type1(Request $request){
     echo '是否get请求';
    dump($request::instance()->isGet());
    echo '是否post请求';
    dump($request::instance()->post());
    echo '是否是AJAx请求';
    dump($request::instance()->isAjax());
    echo '是否是手机访问';
    dump($request::instance()->isMobile());
    echo "请求方法";
    dump($request->method());
}

public function mian(){
       return view();
}
public function jintai(Request $request){
        echo url('index/index');
        dump($request->ext());
}
public function bangd( $id="123",$name="admin"){
//       dump(input('id'));
//        dump(input('name'));
        dump($id);
        dump($name);
}
public function data(){
       $DB=new Db();
//        $data=$DB::table("think_user")->select();

        $data=$DB::query("select * from think_user");
        dump($data);
}
public function data1(){
       echo "我是使用方法配置连接数据库";
//       $Db=Db::connect([
//           'type'=>'mysql',
//           'hostname'=>'127.0.0.1',
//           'database'=>'test',
//           'username'=>'root',
//           'password'=>'',
//           'hostport'=>'3306',
//           ]);

    //字符集配置连接：数据库类型://用户名:密码@数据库地址:数据库端口/数据库名#字符集
            $Db=Db::connect('mysql://root:@127.0.0.1:3306/test#utf8');


           $data=$Db->table('think_user')->select();
           dump($data);



}
public function data2(){
       echo "使用模型连接数据库";
       $user=new \app\index\model\User();
       dump($user::all());
}
public function indexm(){
       $user=new \app\index\model\think_user();
       dump($user::get(1079)->toArray());
}
public function get1(){
       //调用静态
    //引入model位置use app\index\model\think_user;
  // $res=think_user::get(1079);

    //实例化模型
//        $think_user=new Think_user;
//        $res=$think_user::get(1079);


    //使用Loader,这个不可用
    //引入use think\Loader;
//    $think_user=Loader::model("thin_kuser");
//    $res=$think_user::get(1079);
//
//    dump($res->toArray());
        //2018/4/24学习不可用
///     助手函数
//    $user=Model("thin_kuser");
//    $res=$user::get(1079);
//     dump($res->toArray());
}
public function getOne(){

}
}

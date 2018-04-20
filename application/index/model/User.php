<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/19
 * Time: 9:16
 */
namespace app\index\model;
use think\Model;
class User extends Model{
    //使用数组连接数据库
    protected  $connection=[
        // 数据库类型
        'type'            => 'mysql',
        // 服务器地址
        'hostname'        => '127.0.0.1',
        // 数据库名
        'database'        => 'test',
        // 用户名
        'username'        => 'root',
        // 密码
        'password'        => '',
        // 端口
        'hostport'        => '3306',
        'prefix'      => 'think_',
    ];
//protected $connection="mysql://root:@127.0.0.1:3306/test#utf8";

}
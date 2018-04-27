<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/24
 * Time: 14:12
 */

namespace app\index\model;
//导入系统的数据模型
use think\Model;
use traits\model\SoftDelete;

class think_user extends Model
{
use SoftDelete;



    //无论更新操作还是修改数据丢回皂搓
//    protected $auto=['time','state'];
    protected $auto=[];
    protected $insert=['create_time'];
    protected $update=['update_time'];

        //书写自动完成
    protected function setTimeAttr(){
        return time();
    }
    protected function setStateAttr(){
        return 1;
    }
    protected function setCreateTimeAttr(){
        return time();
    }
    protected function setUpdateTimeAttr(){
        return time();
    }
//    public function getidAttr($val){
//        switch ($val){
//            case '3':
//                return "你是3好id";
//                break;
//            case '4':
//                return "你是4好id";
//                break;
//            case '5':
//                return "你是5好id";
//                break;
//        }
//    }
//    public function setPwdAttr($val){
//    return md5($val);
//}
//        public function setNameattt($val){
//                return strtoupper($val);
//        }
//        public function setPwdAttr($val){
//            return md5($val);
//        }


}
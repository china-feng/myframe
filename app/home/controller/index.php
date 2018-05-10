<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-4-23
 * Time: 上午9:45
 */
namespace app\home\controller;
use app\home\model\adminModel;
use frame\controller;
use frame\conf;
class index extends controller{
    /*public function __construct(){
        echo 123;
    }*/
    public function index() {
        $model = new adminModel();
        $model->index();
//        var_dump($_GET);
//        $conf = new conf();
//        echo $value = conf::get('DEFAULT_MODEL','route');
        $value = conf::all('route');
        var_dump($value);
        $this->assign(array('data'=>'hello world'));
        $this->display('home/view/index.html');
    }

    public function test(){
        echo 123;
    }
}
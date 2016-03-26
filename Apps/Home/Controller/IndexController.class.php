<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends BaseController{
    public function index(){
//        debug(get_defined_constants());
		$this->display();
    }
}
<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
        function __construct()
        {
            parent::__construct();
            $this->getMenus();
        }
        //获取导航菜单
        function getMenus(){
            //top菜单导航
            $cates = D('Catalogue')->select();
            $this->assign('cate', $cates);
        }

}
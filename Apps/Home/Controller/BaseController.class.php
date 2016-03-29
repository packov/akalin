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
            $menus = array();
            //一级目录
            $list = D('Catalogue')->where('`pid` = 0')->select();
            //debug($list);
            //二级目录
            $lists = D('Catalogue')->where('`pid`' != 0)->select();
            //debug($lists);
            $this->assign('list',$list);
            $this->assign('lists',$lists);
        }

}
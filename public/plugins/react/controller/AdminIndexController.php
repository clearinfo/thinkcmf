<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\react\controller; //Demo插件英文名，改成你的插件英文就行了

use cmf\controller\PluginAdminBaseController;
use think\Db;

class AdminIndexController extends PluginAdminBaseController
{

    protected function _initialize()
    {
        parent::_initialize();
        $adminId = cmf_get_current_admin_id();//获取后台管理员id，可判断是否登录
        if (!empty($adminId)) {
            $this->assign("admin_id", $adminId);
        }
    }

    /**
     * 演示插件
     * @adminMenu(
     *     'name'   => 'React创建工具',
     *     'parent' => 'admin/Plugin/default',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => 'React创建工具',
     *     'param'  => ''
     * )
     */
    public function index()
    {
        $users = Db::name("user")->limit(0, 5)->select();
        //$demos = PluginDemoModel::all();

        //print_r($users);

        $this->assign("users", $users);
        return $this->fetch('/admin_index');
    }

    /**
     * 演示插件设置
     * @adminMenu(
     *     'name'   => 'React设置',
     *     'parent' => 'index',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => 'React设置',
     *     'param'  => ''
     * )
     */
    public function setting()
    {
        $users = Db::name("user")->limit(0, 5)->select();
        //$demos = PluginDemoModel::all();

        // print_r($demos);

        $this->assign("users", $users);
        return $this->fetch('/admin_index');
    }
    /*添加页*/
    public function add()
    {
        $users = Db::name("reactvue")->limit(0, 5)->select();
        //$demos = PluginDemoModel::all();

        print_r($users);

        //$this->assign("users", $users);
        return $this->fetch('/admin_react/add');
    }
    public function addPost()
    {
        $data = $this->request->get();//默认param,可选get,post
        /*验证*/
        /*$result = $this->validate($data, "AdminReact");

        if ($result !== true) {
            $this->error($result);
        }*/
        print_r($data);
        //$user = ['name_en'=>'title','name_zh'=>'名称2','formtype'=>1,'valtype'=>1,'values'=>'myname'];
        //Db::name('reactvue')->insert($user);
        Db::name('reactvue')->insert($data);
        //$this->success('添加成功！');
        $this->success('添加成功！', cmf_plugin_url('React://AdminIndex/index'));


    }

}

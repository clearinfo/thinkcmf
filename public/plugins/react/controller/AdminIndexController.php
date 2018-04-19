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
    public function vue()
    {
        $users = Db::name("reactvue")->where('rid=2')->limit(0, 1)->select();//根据id获取当前数据
        $alldata = Db::name("reactvue")->limit(0, 10)->select();
        //print_r($alldata);
        $outputform="<template>";
        $formtype="";
        //print_r($alldata[0]['rid']);
        $len=count($alldata);
        for ($i=0; $i <$len; $i++) { 
            //print_r($alldata[$i]);
            /*for ($k=0; $k <3 ; $k++) { 
                print_r([$k]);
            }*/
            //print_r($alldata[$i]);
            foreach ($alldata[$i] as $key => $value) {
                //print_r($key.':'.$value);
                if($key=='formtype' && $alldata[$i]['formtype']==0){
                    //print_r('song-');
                    $outputform.="<FormItem label=\"标题\" prop=\"{$key}\">
                    <Input v-model=\"formItem.{$key}\" placeholder=\"标题\"></Input>
                    </FormItem>";
                }elseif ($key=='formtype' && $alldata[$i]['formtype']==1) {
                    $outputform.="<FormItem label=\"内容\" prop=\"{$key}\">
                        <Input v-model=\"formItem.{$key}\" type=\"textarea\" :rows=\"4\" placeholder=\"内容\"></Input>
                    </FormItem>";
                }
            }
        }
        //$formtype=$users[0]['formtype'];
        //print_r(array_keys($users[0]));
        /*$variable=$users[0];        
        foreach ($variable as $key => $value) {
            print_r($key.":".$value);
            switch ($value) {
                case 0:
                    $outputform.="<FormItem label=\"标题\" prop=\"title\">
                    <Input v-model=\"formItem.title\" placeholder=\"标题\"></Input>
                    </FormItem>";                
                    break;
                default:
                    $outputform.="<FormItem label=\"内容\" prop=\"content\">
                            <Input v-model=\"formItem.content\" type=\"textarea\" :rows=\"4\" placeholder=\"内容\"></Input>
                        </FormItem>";
                    
                    break;
            }
        }*/
        
        /*switch ($formtype) {
            case 0:
                $outputform.="<FormItem label=\"标题\" prop=\"title\">
                <Input v-model=\"formItem.title\" placeholder=\"标题\"></Input>
                </FormItem>";                
                break;
            default:
                $outputform.="<FormItem label=\"内容\" prop=\"content\">
                        <Input v-model=\"formItem.content\" type=\"textarea\" :rows=\"4\" placeholder=\"内容\"></Input>
                    </FormItem>";
                
                break;
        }*/
        $outputform.="</template>";
        //print_r($outputform);
        echo file_put_contents("components/notice.vue",$outputform);//createVue
        $this->assign("outputform",$outputform);
        $this->assign("formtype",$formtype);
        $this->assign("users", $users);

        return $this->fetch('/admin_react/vue');
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

<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\react\controller; //Demo插件英文名，改成你的插件英文就行了

use app\admin\model\RouteModel;
use cmf\controller\PluginAdminBaseController;
use think\Db;
use think\url;

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
        $filelist = Db::name("reactfilelist")->limit(0, 5)->select();
        $this->assign("users", $users);
        $this->assign("filelist",$filelist);
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
    public function prop($rid)
    {
    	$alldata = Db::name("reactvue")->where('fileid='.$rid)->select();
    	$getclass = Db::name("reactfilelist")->where('id='.$rid)->select();
    	$filename=$getclass[0]['filename'];
    	$descoration=$getclass[0]['descoration'];
    	$postfixname=$getclass[0]['postfixname'];
    	$this->assign("descoration",$descoration);
    	$this->assign("postfixname",$postfixname);
    	$this->assign("filename",$filename);
    	$this->assign("alldata", $alldata);
        $this->assign("rid",$rid);
    	return $this->fetch('/admin_react/prop');
    }
    public function app($rid)
    {
        $alldata = Db::name("reactvue")->where('fileid='.$rid)->select();
        $getclass = Db::name("reactfilelist")->where('id='.$rid)->select();
        $filename=$getclass[0]['filename'];
        $descoration=$getclass[0]['descoration'];
        $postfixname=$getclass[0]['postfixname'];
        $this->assign("descoration",$descoration);
        $this->assign("postfixname",$postfixname);
        $this->assign("filename",$filename);
        $this->assign("alldata", $alldata);
        $this->assign("rid",$rid);
        return $this->fetch('/admin_react/app');
    }
    public function vue($rid)
    {
        $users = Db::name("reactvue")->where('rid='.$rid)->select();//根据id获取当前数据
        $getclass = Db::name("reactfilelist")->where('id='.$rid)->select();
        $alldata = Db::name("reactvue")->where('fileid='.$rid)->select();
        $filename=$getclass[0]['filename'];
        
        //$getprop=$_SERVER["REQUEST_URI"];
        $outputform="<template>\n";
        $formtype="";
        //print_r($alldata[0]['rid']);
        $len=count($alldata);
        $outputform.="<Form ref=\"formItem\" :model=\"formItem\" :rules=\"ruleValidate\" :label-width=\"80\">\n";
        foreach ($alldata as $key => $value) {
            foreach ($value as $k => $val) {
                switch ($k) {
                    case 'formtype':
                        if ($val==0) {
    $outputform.="<FormItem label=\"{$value['name_zh']}\" prop=\"{$value['name_en']}\">
    <DatePicker type=\"date\" multiple placeholder=\"Select date\" style=\"width: 300px\"></DatePicker>
    </FormItem>\n";
                        }elseif ($val==1) {
    $outputform.="<FormItem label=\"{$value['name_zh']}\" prop=\"{$value['name_en']}\">
    <Input v-model=\"formItem.{$value['name_en']}\" type=\"textarea\" :rows=\"4\"></Input>
    </FormItem>\n";
                        }else{
    $outputform.="<FormItem label=\"{$value['name_zh']}\" prop=\"{$value['name_en']}\">
    <Input v-model=\"formItem.{$value['name_en']}\" placeholder=\"标题\"></Input>
    </FormItem>\n";
                        }
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
        }
        $outputform.="</Form>\n";
        $outputform.="<Table :columns=\"columns1\" :data=\"listData\"></Table>\n";
        //$formtype=$users[0]['formtype'];
        //print_r(array_keys($users[0]));        

        $outputform.="</template>\n";
        $outputform.="<script>";
        $vuedata="";
        foreach ($alldata as $key => $value) {            
                $vuedata.="{$value['name_en']}:'',//{$value['name_zh']}\n";            
        }
        $vuetd="";
        foreach ($alldata as $key => $value) { 
            if($value['istable']>0){
                $vuetd.="{"; 
                $vuetd.="title:'{$value['name_zh']}',\n"; 
                $vuetd.="key:'{$value['name_en']}',\n";                 
                $vuetd.="width:'{$value['width']}',\n";                 
                $vuetd.="},";
            };       
        }
        $outputform.="
            import './index.css';
            import sysbinVerification from '../lib/verification';
            import symbinUtil from '../lib/util';
            import Vue from 'vue';
            export default {
                props:['obserable'],
                name:'zmitiindex',
                data(){
                    return {
                        currentIndex:'',                   
                        formItem:{{$vuedata}},
                        columns1:[{$vuetd}],
                        listData:[]
                   }
                },
                methods:{
                },
                mounted(){//页面加载完成后显示
                               
                },
            }
        ";
        $outputform.="</script>\n";
        print_r($outputform);
        echo file_put_contents("components/{$filename}.vue",$outputform);//createVue
        $this->assign("outputform",$outputform);
        $this->assign("formtype",$formtype);
        $this->assign("users", $users);

        return $this->fetch('/admin_react/vue');
    }
    public function addappPost($fileid)
    {
        $data = $this->request->get();//默认param,可选get,post
        Db::name('reactapp')->insert($data);
        $backdata=[];
        $backdata['status']='0';
        $backdata['msg']="提交成功";
        print_r(json_encode($backdata));
    }
    public function editappPost($id){
        $data = $this->request->get();
        Db::name('reactapp')->where('id', $id)->update($data);
        $backdata=[];
        $backdata['status']='0';
        $backdata['msg']="修改成功";
        print_r(json_encode($backdata));
    }
    public function delappPost($id){
        $data = $this->request->get();
        Db::name('reactapp')->where('id', $id)->delete($data);
        $backdata=[];
        $backdata['status']='0';
        $backdata['msg']="删除成功";
        print_r(json_encode($backdata));
    }
    public function getapplistdata($fileid)
    {
        $alldata = Db::name("reactapp")->where('fileid='.$fileid)->select();
        $backdata=[];
        $backdata['status']='0';
        $backdata['list']=$alldata;
        $listdata=json_encode($backdata);
        print_r($listdata);
        $this->assign("listdata",$listdata);
    }
    /*添加input*/
    public function add()
    {
        $users = Db::name("reactvue")->limit(0, 5)->select();
        print_r($users);
        return $this->fetch('/admin_react/add');
    }
    public function addPost($fileid)
    {
        $data = $this->request->get();//默认param,可选get,post
        Db::name('reactvue')->insert($data);
        $backdata=[];
        $backdata['status']='0';
        $backdata['msg']="提交成功";
        print_r(json_encode($backdata));
    }
    public function editPost($rid){
        $data = $this->request->get();
        Db::name('reactvue')->where('rid', $rid)->update($data);
        $backdata=[];
        $backdata['status']='0';
        $backdata['msg']="修改成功";
        print_r(json_encode($backdata));
    }
    public function delPost($rid){
        $data = $this->request->get();
        Db::name('reactvue')->where('rid', $rid)->delete($data);
        $backdata=[];
        $backdata['status']='0';
        $backdata['msg']="删除成功";
        print_r(json_encode($backdata));
    }
    public function getlistdata($fileid)
    {
        $alldata = Db::name("reactvue")->where('fileid='.$fileid)->select();
        $backdata=[];
        $backdata['status']='0';
        $backdata['list']=$alldata;
        $listdata=json_encode($backdata);
        print_r($listdata);
        $this->assign("listdata",$listdata);
    }
    /*添加项目文件*/
    public function filelist()
    {
        $users = Db::name("user")->limit(0, 5)->select();
        //$this->assign("users", $users);
        return $this->fetch('/admin_react/filelist');
    }
    public function addfile()
    {
        $data = $this->request->get();//默认param,可选get,post
        print_r($data);
        //$user = ['name_en'=>'title','name_zh'=>'名称2','formtype'=>1,'valtype'=>1,'values'=>'myname'];
        //Db::name('reactvue')->insert($user);
        Db::name('reactfilelist')->insert($data);
        $this->success('添加成功！');
        //$this->success('添加成功！', cmf_plugin_url('React://AdminIndex/index'));


    }

}

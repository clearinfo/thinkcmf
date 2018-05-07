<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 五五 <15093565100@163.com>
// +----------------------------------------------------------------------
namespace plugins\cangyan;//Cangyan插件英文名，改成你的插件英文就行了
use cmf\lib\Plugin;

//Cangyan插件英文名
class CangyanPlugin extends Plugin
{

    public $info = [
        'name'        => 'Cangyan',//Cangyan插件英文名，
        'title'       => '畅言',
        'description' => '畅言评论插件',
        'status'      => 1,
        'author'      => '五五',
        'version'     => '1.0',
        'demo_url'    => 'http://www.wuwuseo.com',
        'author_url'  => 'http://www.wuwuseo.com'
    ];

    public $hasAdmin = 1;//插件是否有后台管理界面

    // 插件安装
    public function install()
    {
        return true;//安装成功返回true，失败false
    }

    // 插件卸载
    public function uninstall()
    {
        return true;//卸载成功返回true，失败false
    }

    //实现的comment钩子方法
    public function comment($param)
    {
        $sid = 'cy_';
        if(!empty($param['post_table'])){
            $sid .= $param['post_table'];
        }
        if(!empty($param['post_id'])){
            $sid .= $param['post_id'];
        }
        if(!empty($param['table_name'])){
            $sid .= $param['table_name'];
        }
        if(!empty($param['object_id'])){
            $sid .= $param['object_id'];
        }
        if(
            (empty($param['post_table']) && empty($param['table_name']))
            ||  (empty($param['post_id']) && empty($param['object_id']))
          ){//参数 未安标准传入时 获取全部url md5作为$sid
            $sid .= md5(request()->url());
        }
        $config = $this->getConfig();
        $this->assign([
            'config'=>$config,
            'sid'=>$sid
        ]);
        return $this->fetch('widget');
    }

}
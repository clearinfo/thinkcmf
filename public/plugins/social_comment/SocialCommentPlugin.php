<?php
namespace plugins\social_comment;//Demo插件英文名，改成你的插件英文就行了
use cmf\lib\Plugin;

class SocialCommentPlugin extends Plugin{

    public $info = [
        'name'=>'SocialComment',
        'title'=>'通用社交化评论',
        'description'=>'集成了各种社交化评论插件，轻松集成到系统中。',
        'status'=>1,
        'author'=>'fncong',
        'version'=>'0.1',
        'demo_url'    => 'http://changyan.kuaizhan.com||http://www.uyan.cc'
    ];

    public function install(){
        return true;
    }

    public function uninstall(){
        return true;
    }

    //实现的comment钩子方法
    public function comment($param){

        $config = $this->getConfig();
        $this->assign($config);
        $this->assign($param);
        return $this->fetch('widget');
    }
}
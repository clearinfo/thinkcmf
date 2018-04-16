<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wwwroot\htdocs\thinkcmf\public/plugins/wxapp/view/admin_index.html";i:1516676889;s:69:"C:\wwwroot\htdocs\thinkcmf\public\plugins\wxapp\view\public\head.html";i:1516676889;s:72:"C:\wwwroot\htdocs\thinkcmf\public\plugins\wxapp\view\public\scripts.html";i:1516676889;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<link rel="shortcut icon" href="/thinkcmf/public/plugins/wxapp/view/public/assets/images/favicon.ico" type="image/x-icon">

<link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
<link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
<link href="/thinkcmf/public/static/font-awesome/css/font-awesome.min.css?page=index" rel="stylesheet" type="text/css">

<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/thinkcmf/public/",
        WEB_ROOT: "/thinkcmf/public/",
        JS_ROOT: "static/js/"
    };
</script>
    <title>ThinkCMF插件演示首页</title>
    <meta name="description" content="ThinkCMF插件演示首页">
    <meta name="keywords" content="ThinkCMF插件演示首页">
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a>小程序管理</a></li>
        <li><a href="<?php echo cmf_plugin_url('Wxapp://AdminWxapp/add'); ?>">添加小程序</a></li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20" action="#">
        <div class="table_list">
            <table width="100%" class="table table-hover">
                <thead>
                <tr>
                    <th>名称</th>
                    <th>App ID</th>
                    <th>App Secret</th>
                    <th>默认小程序</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($wxapps) || $wxapps instanceof \think\Collection || $wxapps instanceof \think\Paginator): if( count($wxapps)==0 ) : echo "" ;else: foreach($wxapps as $key=>$vo): ?>
                    <tr>
                        <td><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></td>
                        <td><?php echo (isset($vo['app_id']) && ($vo['app_id'] !== '')?$vo['app_id']:''); ?></td>
                        <td><?php echo (isset($vo['app_secret']) && ($vo['app_secret'] !== '')?$vo['app_secret']:''); ?></td>
                        <td>
                            <?php if(!empty($default_wxapp['app_id']) && !empty($vo['app_id']) &&$default_wxapp['app_id']== $vo['app_id']): ?>
                                是
                                <?php else: ?>
                                否
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo cmf_plugin_url('Wxapp://AdminWxapp/edit',['id'=>$vo['app_id']]); ?>">编辑</a>
                            <a  class="js-ajax-delete" href="<?php echo cmf_plugin_url('Wxapp://AdminWxapp/delete',['id'=>$vo['app_id']]); ?>">删除</a>
                        </td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </form>
</div>
<script src="/thinkcmf/public/static/js/jquery.js"></script>
<script src="/thinkcmf/public/static/js/wind.js"></script>
<script src="/thinkcmf/public/static/js/bootstrap.min.js"></script>
<script src="/thinkcmf/public/static/js/admin.js"></script>
</body>
</html>
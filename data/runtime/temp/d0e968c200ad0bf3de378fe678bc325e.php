<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"C:\wwwroot\htdocs\thinkcmf\public/plugins/demo/view/index.html";i:1523686144;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ThinkCMF插件演示首页">
    <meta name="keywords" content="ThinkCMF插件演示首页">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>ThinkCMF插件</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="shortcut icon" href="/thinkcmf/public/plugins/demo/view/assets/images/favicon.ico" type="image/x-icon">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

</head>
<body>
<div class="well well-warning" style="display: inline-block;">
    <h2>ThinkCMF插件演示</h2>
    <?php echo lang('plugin_demo_hello_world'); ?>
    <p>
        <b>插件根目录:</b>/thinkcmf/public/plugins/demo
    </p>

    <p>
        <b>模板根目录:</b>/thinkcmf/public/plugins/demo/view
    </p>

    <p>
        <b>生成插件控制器 URL:</b><?php echo cmf_plugin_url('Demo://Index/index',['id'=>1]); ?>
    </p>

    <p>
        <b>foreach:</b>
    </p>
    <ol>
        <?php if(is_array($users) || $users instanceof \think\Collection || $users instanceof \think\Paginator): if( count($users)==0 ) : echo "" ;else: foreach($users as $key=>$vo): ?>
            <li><?php echo $vo['user_login']; ?> <?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></li>

        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>


</div>
</body>
</html>
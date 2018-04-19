<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\wwwroot\htdocs\thinkcmf\public/plugins/react/view/admin_react\add.html";i:1523797136;s:69:"C:\wwwroot\htdocs\thinkcmf\public\plugins\react\view\public\head.html";i:1516676889;s:68:"C:\wwwroot\htdocs\thinkcmf\public\plugins\react\view\public\vue.html";i:1523892074;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<link rel="shortcut icon" href="/thinkcmf/public/plugins/react/view/public/assets/images/favicon.ico" type="image/x-icon">

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
    <title>React添加页</title>
    <meta name="description" content="ThinkCMF插件演示首页">
    <meta name="keywords" content="ThinkCMF插件演示首页">
    <link rel="stylesheet" type="text/css" href="/thinkcmf/public/static/iview/styles/iview.css">
<script type="text/javascript" src="/thinkcmf/public/static/js/jquery.js"></script>
<script type="text/javascript" src="/thinkcmf/public/static/vue/vue.min.js"></script>
<script type="text/javascript" src="/thinkcmf/public/static/iview/iview.min.js"></script>
<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
<script src="/thinkcmf/public/static/vue/axios.min.js"></script>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo cmf_plugin_url('React://AdminIndex/index'); ?>">React应用管理</a></li>
        <li class="active"><a href="<?php echo cmf_plugin_url('React://AdminIndex/add'); ?>">添加应用</a></li>
    </ul>
    <form method="post" class="form-horizontal js-ajax-form margin-top-20"
          action="<?php echo cmf_plugin_url('React://AdminIndex/addPost'); ?>">

        <div class="form-group">
            <label class="col-sm-2 control-label"><span class="form-required">*</span>英文名称</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" name="name_en" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><span class="form-required">*</span>中文名称</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" name="name_zh" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><span class="form-required">*</span>formtype</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" name="formtype" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">valtype</label>
            <div class="col-md-6 col-sm-10">
                <div class="">
                    
                        <input type="text" name="valtype" value="1">
                   
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">values</label>
            <div class="col-md-6 col-sm-10">
                <div class="">
                    
                        <input type="text" name="values" value="1">
                    
                </div>
            </div>
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang("SAVE"); ?></button>
        </div>
    </form>
</div>

</body>
</html>
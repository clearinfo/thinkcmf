<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"C:\wwwroot\htdocs\thinkcmf\public/plugins/wxapp/view/admin_wxapp\edit.html";i:1516676889;s:69:"C:\wwwroot\htdocs\thinkcmf\public\plugins\wxapp\view\public\head.html";i:1516676889;s:72:"C:\wwwroot\htdocs\thinkcmf\public\plugins\wxapp\view\public\scripts.html";i:1516676889;}*/ ?>
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
        <li><a href="<?php echo cmf_plugin_url('Wxapp://AdminIndex/index'); ?>">小程序管理</a></li>
        <li><a href="<?php echo cmf_plugin_url('Wxapp://AdminWxapp/add'); ?>">添加小程序</a></li>
        <li class="active"><a>编辑小程序</a></li>
    </ul>
    <form method="post" class="form-horizontal js-ajax-form margin-top-20"
          action="<?php echo cmf_plugin_url('Wxapp://AdminWxapp/editPost'); ?>">

        <div class="form-group">
            <label class="col-sm-2 control-label"><span class="form-required">*</span>名称</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" name="name" value="<?php echo (isset($wxapp['name']) && ($wxapp['name'] !== '')?$wxapp['name']:''); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><span class="form-required">*</span>App ID</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" name="app_id" value="<?php echo (isset($wxapp['app_id']) && ($wxapp['app_id'] !== '')?$wxapp['app_id']:''); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><span class="form-required">*</span>App Secret</label>
            <div class="col-md-6 col-sm-10">
                <input type="text" class="form-control" name="app_secret" value="<?php echo (isset($wxapp['app_secret']) && ($wxapp['app_secret'] !== '')?$wxapp['app_secret']:''); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">默认小程序</label>
            <div class="col-md-6 col-sm-10">
                <div class="checkbox">
                    <label>
                        <?php if(!empty($default_wxapp['app_id']) && !empty($wxapp['app_id']) && $default_wxapp['app_id']== $wxapp['app_id']): ?>
                            <input type="checkbox" name="is_default" value="1" checked>
                            <?php else: ?>
                            <input type="checkbox" name="is_default" value="1">
                        <?php endif; ?>

                    </label>
                </div>
            </div>
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang("SAVE"); ?></button>
        </div>
    </form>
</div>
<script src="/thinkcmf/public/static/js/jquery.js"></script>
<script src="/thinkcmf/public/static/js/wind.js"></script>
<script src="/thinkcmf/public/static/js/bootstrap.min.js"></script>
<script src="/thinkcmf/public/static/js/admin.js"></script>
</body>
</html>
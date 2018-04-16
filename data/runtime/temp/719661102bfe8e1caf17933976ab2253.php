<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"themes/admin_simpleboot3/admin\theme\install.html";i:1516676889;s:77:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\public\header.html";i:1516676889;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/thinkcmf/public/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/thinkcmf/public/",
            WEB_ROOT: "/thinkcmf/public/",
            JS_ROOT: "static/js/",
            APP: '<?php echo \think\Request::instance()->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="/thinkcmf/public/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/thinkcmf/public/static/js/wind.js"></script>
    <script src="/thinkcmf/public/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('theme/index'); ?>">所有模板</a></li>
        <li class="active"><a>安装模板</a></li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20">
        <?php  $status=array("1"=>lang('DISPLAY'),"0"=>lang('HIDDEN')); ?>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th>模板</th>
                <th>模板名称</th>
                <th>版本号</th>
                <th>作者</th>
                <th>模板描述</th>
                <th width="120"><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($themes) || $themes instanceof \think\Collection || $themes instanceof \think\Paginator): if( count($themes)==0 ) : echo "" ;else: foreach($themes as $key=>$vo): ?>
                <tr>
                    <td><?php echo $vo['theme']; ?></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td><?php echo $vo['version']; ?></td>
                    <td><?php echo $vo['author']; ?></td>
                    <td><?php echo $vo['description']; ?></td>
                    <td>
                        <a href="<?php echo url('theme/installTheme',array('theme'=>$vo['theme'])); ?>" class="js-ajax-dialog-btn">安装</a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
            <tfoot>
            <tr>
                <th>模板</th>
                <th>模板名称</th>
                <th>版本号</th>
                <th>作者</th>
                <th>模板描述</th>
                <th width="120"><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </tfoot>
        </table>
    </form>
</div>
<script src="/thinkcmf/public/static/js/admin.js"></script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"themes/admin_simpleboot3/portal\admin_tag\index.html";i:1516676889;s:77:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\public\header.html";i:1516676889;}*/ ?>
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
<div class="wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo url('AdminTag/index'); ?>">标签管理</a></li>
        <li><a href="<?php echo url('AdminTag/add'); ?>">添加标签</a></li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20">
        <div class="table-actions">
            <!--<button type="submit" class="btn btn-primary btn-sm js-ajax-submit"><?php echo lang('SORT'); ?></button>-->
        </div>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="50">ID</th>
                <th>标签名称</th>
                <th>状态</th>
                <th width="160">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): if( count($tags)==0 ) : echo "" ;else: foreach($tags as $key=>$vo): ?>
                <tr>
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td><?php echo $arrStatus[$vo['status']]; ?></td>
                    <td>
                        <?php if($vo['status'] == 1): ?>
                            <a class="js-ajax-dialog-btn"
                               href="<?php echo url('AdminTag/upStatus',['id'=>$vo['id'],'status'=>0]); ?>">禁用</a>
                            <?php else: ?>
                            <a class="js-ajax-dialog-btn"
                               href="<?php echo url('AdminTag/upStatus',['id'=>$vo['id'] ,'status'=>1]); ?>">启用</a>
                        <?php endif; ?>
                        <a class="js-ajax-delete" href="<?php echo url('AdminTag/delete',['id'=>$vo['id']]); ?>">删除</a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
            <tfoot>
            <tr>
                <th width="50">ID</th>
                <th>标签名称</th>
                <th>状态</th>
                <th width="160">操作</th>
            </tr>
            </tfoot>
        </table>
        <div class="table-actions">
            <!--<button type="submit" class="btn btn-primary btn-sm js-ajax-submit"><?php echo lang('SORT'); ?></button>-->
        </div>
    </form>
    <ul class="pagination"><?php echo (isset($page) && ($page !== '')?$page:''); ?></ul>
</div>
<script src="/thinkcmf/public/static/js/admin.js"></script>
</body>
</html>
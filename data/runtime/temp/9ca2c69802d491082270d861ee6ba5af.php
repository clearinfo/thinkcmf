<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"themes/admin_simpleboot3/user\admin_user_action\index.html";i:1516676889;s:77:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\public\header.html";i:1516676889;}*/ ?>
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
        <li class="active"><a>用户操作管理</a></li>
        <li><a href="<?php echo url('AdminUserAction/sync'); ?>">同步用户操作</a></li>
    </ul>
    <form method="post" class="js-ajax-form margin-top-20">
        <?php $cycle_types=['0'=>'不限','1'=>'天','2'=>'小时','3'=>'永久'] ?>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>操作</th>
                <th>积分更改</th>
                <th>金币更改</th>
                <th>奖励周期</th>
                <th><?php echo lang('ACTIONS'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($actions) || $actions instanceof \think\Collection || $actions instanceof \think\Paginator): if( count($actions)==0 ) : echo "" ;else: foreach($actions as $key=>$vo):  ?>
                <tr>
                    <td><?php echo $vo['name']; ?> <?php echo $vo['action']; ?></td>
                    <td><?php echo $vo['score']; ?></td>
                    <td><?php echo $vo['coin']; ?></td>
                    <th>
                        <?php if($vo['cycle_type'] == '0'): ?>
                            不限
                            <?php else: ?>
                            <?php echo $vo['reward_number']; ?>次/<?php echo $vo['cycle_time']; ?><?php echo $cycle_types[$vo['cycle_type']]; endif; ?>

                    </th>
                    <td>
                        <a href="<?php echo url('AdminUserAction/edit'); ?>?id=<?php echo $vo['id']; ?>">编辑</a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="pagination"><?php echo $page; ?></div>
    </form>
</div>
<script src="/thinkcmf/public/static/js/admin.js"></script>
</body>
</html>
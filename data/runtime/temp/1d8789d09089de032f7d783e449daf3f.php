<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"themes/admin_simpleboot3/user\admin_asset\index.html";i:1516676889;s:77:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\public\header.html";i:1516676889;}*/ ?>
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
        <li class="active"><a href="<?php echo url('AdminAsset/index'); ?>">资源列表</a></li>
    </ul>
    <?php $status=['不可用', '可用']; ?>
    <table class="table table-hover table-bordered margin-top-20">
        <thead>
        <tr>
            <th width="50">ID</th>
            <th>用户</th>
            <th>文件大小</th>
            <th>文件名</th>
            <th>图像</th>
            <th>文件路径</th>
            <th>状态</th>
            <th width="160"><?php echo lang('ACTIONS'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php 
            $asset_img_suffixes=['bmp','jpg','jpeg','png','gif','tiff'];/*TODO ADD MORE*/
         if(is_array($assets) || $assets instanceof \think\Collection || $assets instanceof \think\Paginator): if( count($assets)==0 ) : echo "" ;else: foreach($assets as $key=>$vo): ?>
            <tr>
                <td><?php echo $vo['id']; ?></td>
                <td>
                    用户ID:<?php echo $vo['user_id']; ?> <?php echo $vo['user_login']; ?> <?php echo $vo['user_nickname']; ?>
                </td>
                <td><?php echo round($vo['file_size']/1024); ?>KB</td>
                <td><?php echo $vo['filename']; ?></td>
                <td>
                    <?php if(in_array(strtolower($vo['suffix']),$asset_img_suffixes)): ?>
                        <a href="javascript:parent.imagePreviewDialog('<?php echo cmf_get_image_preview_url($vo['file_path']); ?>');">
                            <i class="fa fa-photo fa-fw"></i>
                        </a>
                    <?php endif; ?>
                </td>
                <td>
                    <?php echo $vo['file_path']; if(!file_exists('upload/'.$vo['file_path'])): ?>
                        <span style='color:red;'>&nbsp;&nbsp(文件丢失)</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $status[$vo['status']]; ?></td>
                <td>
                    <a href="<?php echo url('AdminAsset/delete',array('id'=>$vo['id'])); ?>" class="js-ajax-delete"><?php echo lang('DELETE'); ?></a>
                </td>
            </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div class="pagination"><?php echo (isset($page) && ($page !== '')?$page:''); ?></div>

</div>
<script src="/thinkcmf/public/static/js/admin.js"></script>
</body>
</html>

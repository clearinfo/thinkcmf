<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:51:"themes/admin_simpleboot3/portal\admin_page\add.html";i:1516676889;s:77:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\public\header.html";i:1516676889;}*/ ?>
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
        <li><a href="<?php echo url('AdminPage/index'); ?>">所有页面</a></li>
        <li class="active"><a href="<?php echo url('AdminPage/add'); ?>">添加页面</a></li>
    </ul>
    <form action="<?php echo url('AdminPage/addPost'); ?>" method="post" class="form-horizontal js-ajax-form margin-top-20">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th width="100">标题<span class="form-required">*</span></th>
                        <td>
                            <input class="form-control" type="text" style="width: 400px;" name="post[post_title]"
                                   required
                                   placeholder="请输入标题"/>
                        </td>
                    </tr>
                    <tr>
                        <th>关键词</th>
                        <td>
                            <input class="form-control" type="text" name="post[post_keywords]" style="width:400px"
                                   placeholder="请输入关键字">
                            <p class="help-block">多关键词之间用空格隔开</p>
                        </td>
                    </tr>
                    <tr>
                        <th>摘要</th>
                        <td><textarea class="form-control" name="post[post_excerpt]" style="height: 50px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>内容</th>
                        <td>
                            <script type="text/plain" id="content" name="post[post_content]"></script>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('SAVE'); ?></button>
                        <a class="btn btn-default" href="<?php echo url('AdminPage/index'); ?>"><?php echo lang('BACK'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <table class="table table-bordered">
                    <tr>
                        <th>缩略图</th>
                    </tr>
                    <tr>
                        <td>
                            <div style="text-align: center;">
                                <input type='hidden' name='post[more][thumbnail]' id='thumbnail'>
                                <a href="javascript:uploadOneImage('图片上传','#thumbnail');">
                                    <img src="/thinkcmf/public/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id='thumbnail-preview'
                                         width='135' height='135' style='cursor: hand'/>
                                </a>
                                <input type="button" class="btn btn-sm"
                                       onclick="$('#thumbnail-preview').attr('src','/thinkcmf/public/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#thumbnail').val('');return false;"
                                       value="取消图片">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>发布时间</th>
                    </tr>
                    <tr>
                        <td><input class="form-control js-bootstrap-datetime" type="text" name="post[published_time]"
                                   value="<?php echo date('Y-m-d H:i',time()); ?>"></td>
                    </tr>
                    <tr>
                        <th>状态</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label><input type="checkbox" name="post[post_status]" value="1" checked>发布</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>模板</th>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" name="post[more][template]" id="more-template-select">
                                <option value="">请选择模板</option>
                                <?php if(is_array($page_theme_files) || $page_theme_files instanceof \think\Collection || $page_theme_files instanceof \think\Paginator): if( count($page_theme_files)==0 ) : echo "" ;else: foreach($page_theme_files as $key=>$vo): $value=preg_replace('/^portal\//','',$vo['file']); ?>
                                    <option value="<?php echo $value; ?>"><?php echo $vo['name']; ?> <?php echo $vo['file']; ?>.html</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/thinkcmf/public/static/js/admin.js"></script>
<script type="text/javascript">
    //编辑器路径定义
    var editorURL = GV.WEB_ROOT;
</script>
<script type="text/javascript" src="/thinkcmf/public/static/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/thinkcmf/public/static/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
    $(function () {

        editorcontent = new baidu.editor.ui.Editor();
        editorcontent.render('content');
        try {
            editorcontent.sync();
        } catch (err) {
        }

        $('#more-template-select').val('page');
    });
</script>
</body>
</html>

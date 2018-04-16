<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"C:\wwwroot\htdocs\thinkcmf\public/../app/install\view\\step2.html";i:1516676889;s:60:"C:\wwwroot\htdocs\thinkcmf\app\install\view\public\head.html";i:1516676889;s:62:"C:\wwwroot\htdocs\thinkcmf\app\install\view\public\header.html";i:1516676889;s:62:"C:\wwwroot\htdocs\thinkcmf\app\install\view\public\footer.html";i:1516676889;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
<title>ThinkCMF安装</title>
<link rel="stylesheet" href="/thinkcmf/public/static/install/simpleboot/themes/flat/theme.min.css" />
<link rel="stylesheet" href="/thinkcmf/public/static/install/css/install.css" />
<link rel="stylesheet" href="/thinkcmf/public/static/font-awesome/css/font-awesome.min.css" type="text/css">


    <script src="/thinkcmf/public/static/js/jquery.js"></script>
    <style>
        .rewrite-correct, .rewrite-error {
            display: none;
        }
    </style>
</head>
<body>
<div class="wrap">
    <div class="header">
	<h1 class="logo">ThinkCMF 安装向导</h1>
	<div class="version"><?php echo THINKCMF_VERSION; ?></div>
</div>
    <section class="section">
        <div class="step">
            <ul class="unstyled">
                <li class="current"><em>1</em>检测环境</li>
                <li><em>2</em>创建数据</li>
                <li><em>3</em>完成安装</li>
            </ul>
        </div>
        <div class="server">
            <table width="100%">
                <tr>
                    <td class="td1">环境检测</td>
                    <td class="td1" width="25%">推荐配置</td>
                    <td class="td1" width="25%">当前状态</td>
                    <td class="td1" width="25%">最低要求</td>
                </tr>
                <tr>
                    <td>操作系统</td>
                    <td>类UNIX</td>
                    <td><i class="fa fa-check correct"></i> <?php echo $os; ?></td>
                    <td>不限制</td>
                </tr>
                <tr>
                    <td>PHP版本</td>
                    <td>>5.6.x</td>
                    <td><i class="fa fa-check correct"></i> <?php echo $phpversion; ?></td>
                    <td>5.4.0</td>
                </tr>
                <!-- 模块检测 -->
                <tr>
                    <td class="td1" colspan="4">
                        模块检测
                    </td>
                </tr>
                <tr>
                    <td>session</td>
                    <td>开启</td>
                    <td>
                        <?php echo $session; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <tr>
                    <td>
                        PDO
                        <a href="https://www.baidu.com/s?wd=开启PDO,PDO_MYSQL扩展" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <?php echo $pdo; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <tr>
                    <td>
                        PDO_MySQL
                        <a href="https://www.baidu.com/s?wd=开启PDO,PDO_MYSQL扩展" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <?php echo $pdo_mysql; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <tr>
                    <td>
                        CURL
                        <a href="https://www.baidu.com/s?wd=开启PHP CURL扩展" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <?php echo $curl; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <tr>
                    <td>
                        GD
                        <a href="https://www.baidu.com/s?wd=开启PHP GD扩展" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <?php echo $gd; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <tr>
                    <td>
                        MBstring
                        <a href="https://www.baidu.com/s?wd=开启PHP MBstring扩展" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <?php echo $mbstring; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <tr>
                    <td>
                        fileinfo
                        <a href="https://www.baidu.com/s?wd=开启PHP fileinfo扩展" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <?php echo $fileinfo; ?>
                    </td>
                    <td>开启</td>
                </tr>
                <?php if(!(empty($show_always_populate_raw_post_data_tip) || (($show_always_populate_raw_post_data_tip instanceof \think\Collection || $show_always_populate_raw_post_data_tip instanceof \think\Paginator ) && $show_always_populate_raw_post_data_tip->isEmpty()))): ?>
                    <tr>
                        <td>
                            $HTTP_RAW_POST_DATA关闭检测
                            <a href="https://www.baidu.com/s?wd=开启PHP fileinfo扩展" target="_blank">
                                <i class="fa fa-question-circle question"></i>
                            </a>
                        </td>
                        <td>关闭</td>
                        <td>
                            <?php echo $always_populate_raw_post_data; ?>

                        </td>
                        <td>关闭</td>
                    </tr>
                    <tr>
                        <td>$HTTP_RAW_POST_DATA未关闭解决</td>
                        <td colspan="3">
							<pre>
								;php.ini 找到 always_populate_raw_post_data设置如下:
								always_populate_raw_post_data = -1
							</pre>
                        </td>
                    </tr>
                <?php endif; ?>
                <!-- rewrite检测 -->
                <tr>
                    <td class="td1" colspan="4">
                        rewrite检测（开启rewrite更利于网站SEO优化）
                    </td>
                </tr>
                <tr>
                    <td>
                        服务器rewrite
                        <a href="https://www.kancloud.cn/thinkcmf/faq/493492" target="_blank">
                            <i class="fa fa-question-circle question"></i>
                        </a>
                    </td>
                    <td>开启</td>
                    <td>
                        <span class="rewrite-checking">正在检测...</span>
                        <span class="rewrite-correct"><i class="fa fa-check correct"></i> 支持</span>
                        <span class="rewrite-error"><i class="fa fa-remove error"></i> 不支持</span>
                    </td>
                    <td>开启</td>
                </tr>
                <!-- 大小限制检测 -->
                <tr>
                    <td class="td1" colspan="4">
                        大小限制检测
                    </td>
                </tr>
                <tr>
                    <td>附件上传</td>
                    <td>>2M</td>
                    <td>
                        <?php echo $upload_size; ?>
                    </td>
                    <td>不限制</td>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <td class="td1">目录、文件权限检查</td>
                    <td class="td1" width="25%">写入</td>
                    <td class="td1" width="25%">读取</td>
                </tr>
                <?php if(is_array($folders) || $folders instanceof \think\Collection || $folders instanceof \think\Paginator): if( count($folders)==0 ) : echo "" ;else: foreach($folders as $dir=>$vo): ?>
                    <tr>
                        <td>
                            <?php echo $dir; ?>
                        </td>
                        <td>
                            <?php if($vo['w']): ?>
                                <i class="fa fa-check correct"></i> 可写
                                <?php else: ?>
                                <i class="fa fa-remove error"></i> 不可写
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($vo['r']): ?>
                                <i class="fa fa-check correct"></i> 可读
                                <?php else: ?>
                                <i class="fa fa-remove error"></i> 不可读
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
        <div class="bottom text-center">
            <a href="/thinkcmf/public/?s=install/index/step2" class="btn btn-primary">重新检测</a>
            <a href="<?php echo url('index/step3'); ?>" class="btn btn-primary">下一步</a>
        </div>
    </section>
</div>
<div class="footer">
	&copy; 2013-<?php echo date('Y'); ?> <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF Team</a>
</div>
<script>
    $.ajax({
        url: "/thinkcmf/public/install/index/testRewrite",
        type: 'POST',
        dataType: 'JSON',
        success: function (data) {
            if (data.code) {
                $('.rewrite-correct').show();
                $('.rewrite-checking').hide();
            }
        },
        error: function () {
            $('.rewrite-error').show();
            $('.rewrite-checking').hide();
        }
    })
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"C:\wwwroot\htdocs\thinkcmf\public/../app/install\view\\step5.html";i:1516676889;s:60:"C:\wwwroot\htdocs\thinkcmf\app\install\view\public\head.html";i:1516676889;s:62:"C:\wwwroot\htdocs\thinkcmf\app\install\view\public\header.html";i:1516676889;s:62:"C:\wwwroot\htdocs\thinkcmf\app\install\view\public\footer.html";i:1516676889;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
<title>ThinkCMF安装</title>
<link rel="stylesheet" href="/thinkcmf/public/static/install/simpleboot/themes/flat/theme.min.css" />
<link rel="stylesheet" href="/thinkcmf/public/static/install/css/install.css" />
<link rel="stylesheet" href="/thinkcmf/public/static/font-awesome/css/font-awesome.min.css" type="text/css">


    <script src="/thinkcmf/public/static/js/jquery.js"></script>
</head>
<body>
<div class="wrap">
    <div class="header">
	<h1 class="logo">ThinkCMF 安装向导</h1>
	<div class="version"><?php echo THINKCMF_VERSION; ?></div>
</div>
    <section class="section">
        <div style="padding: 40px 20px;">
            <div class="text-center">
                <a style="font-size: 18px;">恭喜您，安装完成！</a>
                <br>
                <br>
                <div class="alert alert-danger" style="width: 360px;display: inline-block;">
                    为了您的站点安全，安装完成后即可将网站app目录下的“install”文件夹删除!
                    另请对data/conf/database.php文件做好备份，以防丢失！
                </div>
            </div>
            <div class="accordion">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"
                           href="https://www.thinkcmf.com/topic/1508.html"
                           target="_blank">
                            ThinkCMF5入门必看！
                        </a>
                    </div>
                    <div class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <p>
                                ThinkCMF5完全开发手册:
                                <a href="http://www.kancloud.cn/thinkcmf/doc" target="_blank">http://www.kancloud.cn/thinkcmf/doc</a>
                            </p>
                            <p>
                                ThinkCMF5核心理念:
                                <a href="http://www.kancloud.cn/thinkcmf/doc/313906" target="_blank">http://www.kancloud.cn/thinkcmf/doc/313906</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"
                           href="http://www.kancloud.cn/thinkcmf/cmf5api" target="_blank">
                            ThinkCMF API开发及小程序开发入门必看！
                        </a>
                    </div>
                    <div class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <p>
                                CMF5 API开发手册：
                                <a href="http://www.kancloud.cn/thinkcmf/cmf5api" target="_blank">http://www.kancloud.cn/thinkcmf/cmf5api</a>
                            </p>
                            <p>
                                小程序开发：
                                <a href="https://www.kancloud.cn/thinkcmf/cmf5api/451391" target="_blank">https://www.kancloud.cn/thinkcmf/cmf5api/451391</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"
                           href="https://www.thinkcmf.com/college.html" target="_blank">
                            ThinkCMF学院视频教程
                        </a>
                    </div>
                    <div class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <p>
                                ThinkCMF模板开发视频：
                                <a href="https://chuanke.baidu.com/v4472461-241676-1805249.html"
                                   target="_blank">https://chuanke.baidu.com/v4472461-241676-1805249.html</a>
                            </p>
                            <p>
                                ThinkCMF5快速入门：
                                <a href="https://www.thinkcmf.com/topic/1405.html"
                                   target="_blank">https://www.thinkcmf.com/topic/1405.html</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-success" href="<?php echo cmf_get_root(); ?>/">进入前台</a>
                <a class="btn btn-success" href="<?php echo cmf_get_root(); ?>/admin">进入后台</a>
            </div>

        </div>
    </section>
</div>

<div class="footer">
	&copy; 2013-<?php echo date('Y'); ?> <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF Team</a>
</div>
<script>
    $(function () {
        return;
        $.ajax({
            type: "POST",
            url: "http://www.thinkcmf.com/service/installinfo.php",
            data: {
                host: "<?php echo (isset($host) && ($host !== '')?$host:''); ?>",
                ip: "<?php echo (isset($ip) && ($ip !== '')?$ip:''); ?>"
            },
            dataType: 'json',
            success: function () {
            }
        });
    });
</script>
</body>
</html>
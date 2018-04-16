<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"themes/simpleboot3/portal\article.html";i:1516676889;s:69:"C:\wwwroot\htdocs\thinkcmf\public\themes\simpleboot3\public\head.html";i:1516676889;s:73:"C:\wwwroot\htdocs\thinkcmf\public\themes\simpleboot3\public\function.html";i:1516676889;s:68:"C:\wwwroot\htdocs\thinkcmf\public\themes\simpleboot3\public\nav.html";i:1516676889;s:71:"C:\wwwroot\htdocs\thinkcmf\public\themes\simpleboot3\public\footer.html";i:1516676889;s:72:"C:\wwwroot\htdocs\thinkcmf\public\themes\simpleboot3\public\scripts.html";i:1516676889;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $article['post_title']; ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    
<?php 
/*可以加多个方法哟！*/
function _sp_helloworld(){
	echo "hello ThinkCMF!";
}

function _sp_helloworld2(){
	echo "hello ThinkCMF2!";
}


function _sp_helloworld3(){
	echo "hello ThinkCMF3!";
}

 ?>
<meta name="author" content="ThinkCMF">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="/thinkcmf/public/themes/simpleboot3/public/assets/images/favicon.png" type="image/png">
<link rel="shortcut icon" href="/thinkcmf/public/themes/simpleboot3/public/assets/images/favicon.png" type="image/png">
<link href="/thinkcmf/public/themes/simpleboot3/public/assets/simpleboot3/themes/simpleboot3/bootstrap.min.css" rel="stylesheet">
<link href="/thinkcmf/public/themes/simpleboot3/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">
<!--[if IE 7]>
<link rel="stylesheet" href="/thinkcmf/public/themes/simpleboot3/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="/thinkcmf/public/themes/simpleboot3/public/assets/css/style.css" rel="stylesheet">
<style>
    /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
    #backtotop {
        position: fixed;
        bottom: 50px;
        right: 20px;
        display: none;
        cursor: pointer;
        font-size: 50px;
        z-index: 9999;
    }

    #backtotop:hover {
        color: #333
    }

    #main-menu-user li.user {
        display: none
    }
</style>
<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/thinkcmf/public/",
        WEB_ROOT: "/thinkcmf/public/",
        JS_ROOT: "static/js/"
    };
</script>
<script src="/thinkcmf/public/themes/simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
<script src="/thinkcmf/public/themes/simpleboot3/public/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/thinkcmf/public/static/js/wind.js"></script>
	
    <style>
        #article_content img {
            height: auto !important;
            max-width: 100%;
        }

        #article_content {
            word-wrap: break-word;
        }
    </style>
    <?php 
    \think\Hook::listen('before_head_end',$temp5ad2a30c4b71a,null,false);
 ?>
</head>
<body class="body-white">
<nav class="navbar navbar-default navbar-fixed-top active">
    <div class="container active">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/thinkcmf/public/"><?php echo (isset($theme_vars['company_name']) && ($theme_vars['company_name'] !== '')?$theme_vars['company_name']:'ThinkCMF'); ?></a>
        </div>

        <div class="collapse navbar-collapse active" id="bs-example-navbar-collapse-1">
            <ul id="main-menu" class="nav navbar-nav">
                <?php

function __parse_navigation07cb7b9da739d64cd5d190a059397f18($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigation07cb7b9da739d64cd5d190a059397f18';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if(empty($menu['children'])): if($level > 1): ?>
                            <li class="menu-item menu-item-level-<?php echo $level; ?> levelgt1">
                                <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                                    <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?>
                                </a>
                            </li>
                            <?php else: ?>
                            <li class="menu-item menu-item-level-<?php echo $level; ?>">
                                <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                                    <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?>
                                </a>
                            </li>
                        <?php endif; endif; if(!empty($menu['children'])): ?>
    <li class="dropdown dropdown-custom dropdown-custom-level-<?php echo $level; ?>">
        
                        <a href="#" class="dropdown-toggle dropdown-toggle-<?php echo $level; ?>" data-toggle="dropdown">
                            <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?><span class="caret"></span>
                        </a>
                    
        <ul class="dropdown-menu dropdown-menu-level-<?php echo $level; ?>">
            <?php 
            $mLevel=$level+1;
             ?>
            <?php echo $_parse_navigation_func_name($menu['children'],$mLevel); ?>
        </ul>
    </li>
<?php endif; endforeach; endif; else: echo "" ;endif; 
}
    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray('',0);
if(''==''): ?>
    <?php echo __parse_navigation07cb7b9da739d64cd5d190a059397f18($menus); else: ?>
    < id="main-navigation" class="nav navbar-nav navbar-nav-custom">
        <?php echo __parse_navigation07cb7b9da739d64cd5d190a059397f18($menus); ?>
    </>
<?php endif; ?>

            </ul>
            <ul class="nav navbar-nav navbar-right" id="main-menu-user">
                <!--
                <li class="login">
                    <a class="dropdown-toggle notifactions" href="/index.php/user/notification/index"> <i
                            class="fa fa-envelope"></i> <span class="count">0</span></a>
                </li>
                -->
                <li class="dropdown user login">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <?php $user=cmf_get_current_user(); if(empty($user['avatar'])): ?>
                            <img src="/thinkcmf/public/themes/simpleboot3/public/assets/images/headicon.png" class="headicon">
                            <?php else: ?>
                            <img src="<?php echo cmf_get_user_avatar_url($user['avatar']); ?>" class="headicon" width="30"/>
                        <?php endif; ?>
                        <span class="user-nickname"></span><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Profile/center'); ?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo cmf_url('user/Index/logout'); ?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
                    </ul>
                </li>
                <li class="dropdown user offline" style="display: list-item;">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <img src="/thinkcmf/public/themes/simpleboot3/public/assets/images/headicon.png" class="headicon">
                        登录<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Login/index'); ?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo cmf_url('user/Register/index'); ?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" method="post" action="<?php echo cmf_url('portal/Search/index'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search"
                           value="<?php echo input('param.keyword',''); ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Go" style="margin:0"/>
            </form>
        </div>
    </div>
</nav>
<div class="container tc-main">
    <div class="row">
        <div class="col-md-9">
            <div class="tc-box article-box">
                <h2><?php echo $article['post_title']; ?></h2>
                <div class="article-infobox">
                    <span><?php echo date('Y-m-d H:i',$article['published_time']); ?> by <?php echo $article['user']['user_nickname']; ?></span>
                    <span>
		    			<a href="javascript:;"><i class="fa fa-eye"></i><span><?php echo $article['post_hits']; ?></span></a>
						<a href="<?php echo url('portal/Article/doLike',array('id'=>$article['id'])); ?>" class="js-count-btn"><i
                                class="fa fa-thumbs-up"></i><span class="count"><?php echo $article['post_like']; ?></span></a>
						<a href="<?php echo url('user/favorite/add'); ?>"
                           class="js-favorite-btn"
                           data-title="<?php echo base64_encode($article['post_title']); ?>"
                           data-url="<?php echo cmf_url_encode('portal/Article/index',array('id'=>$article['id'])); ?>"
                           data-table="portal_post"
                           data-id="<?php echo $article['id']; ?>"
                        >
							<i class="fa fa-star-o"></i>
						</a>
					</span>
                </div>
                <hr>
                <?php 
                    $before_content_hook_param=[
                    'object_id'=>$article['id'],
                    'table_name'=>'portal_post',
                    'object_title'=>$article['post_title'],
                    'user_id'=>$article['user_id'],
                    'url'=>cmf_url_encode('portal/Article/index',array('id'=>$article['id'],'cid'=>$category['id'])),
                    'object'=>$article
                    ];
                 
    \think\Hook::listen('before_content',$before_content_hook_param,null,false);
 ?>

                <div id="article_content">
                    <?php echo $article['post_content']; ?>
                </div>
                <?php if(!empty($article['post_source'])): ?>
                    <div>
                        <b>注：本文转载自<?php echo $article['post_source']; ?>，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如有侵权行为，请联系我们，我们会及时删除。</b>
                    </div>
                <?php endif; 
                    $after_content_hook_param=[
                    'object_id'=>$article['id'],
                    'table_name'=>'portal_post',
                    'object_title'=>$article['post_title'],
                    'user_id'=>$article['user_id'],
                    'url'=>cmf_url_encode('portal/Article/index',array('id'=>$article['id'],'cid'=>$category['id'])),
                    'object'=>$article
                    ];
                 
    \think\Hook::listen('after_content',$after_content_hook_param,null,false);
 
                    $comment_hook_param=[
                    'object_id'=>$article['id'],
                    'table_name'=>'portal_post',
                    'object_title'=>$article['post_title'],
                    'url'=>cmf_url_encode('portal/Article/index',array('id'=>$article['id'],'cid'=>$category['id'])),
                    'user_id'=>$article['user_id'],
                    ];
                    $comment=hook_one('comment',$comment_hook_param);
                 if(empty($comment) && cmf_get_current_admin_id()): ?>
                    <div style="border: 1px dashed #ddd;min-height: 200px;padding-top: 50px;">
                        <div class="alert alert-warning" role="alert">
                            此区域这为评论区，请安装评论插件！<br>
                            <em>注：普通用户不会看到此提示！</em>
                        </div>
                    </div>
                <?php endif; ?>
                <?php echo $comment; ?>
            </div>


        </div>
        <div class="col-md-3">
            <div class="tc-box first-box">
                <div class="headtitle">
                    <h2>热门文章</h2>
                </div>
                <div class="ranking">
                    <?php 
                        $hot_articles=[];
                     ?>
                    <ul class="list-unstyled">
                        <?php
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => '5',
    'order'   => 'post.post_hits DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>''
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;$top=$key<3?"top3":""; ?>
                            <li class="<?php echo $top; ?>">
                                <i><?php echo $key+1; ?></i>
                                <a title="<?php echo $vo['post_title']; ?>"
                                   href="<?php echo url('portal/article/index',array('id'=>$vo['id'])); ?>">
                                    <?php echo $vo['post_title']; ?>
                                </a>
                            </li>
                        
<?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <br>
<!-- Footer ================================================== -->
<hr>
<div id="footer">
    <?php 
    \think\Hook::listen('footer_start',$temp5ad2a30c4b8ae,null,false);
 ?>
    <div class="links">
        <?php
     $__LINKS__ = \app\admin\service\ApiService::links();
if(is_array($__LINKS__) || $__LINKS__ instanceof \think\Collection || $__LINKS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LINKS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>" target="<?php echo (isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:''); ?>"><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></a>&nbsp;
        
<?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <p>
        Made by <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>
        Code licensed under the
        <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
        <br/>
        Based on
        <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>.
        Icons from
        <a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
        <br>
        备案号:
        <?php if(!(empty($site_info['site_icp']) || (($site_info['site_icp'] instanceof \think\Collection || $site_info['site_icp'] instanceof \think\Paginator ) && $site_info['site_icp']->isEmpty()))): ?>
            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site_info['site_icp']; ?></a>
            <?php else: ?>
            请在后台设置"网站信息"设置"备案信息"
        <?php endif; ?>


    </p>
</div>
<div id="backtotop">
    <i class="fa fa-arrow-circle-up"></i>
</div>

</div>

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/thinkcmf/public/themes/simpleboot3/public/assets/simpleboot3/bootstrap/js/bootstrap.min.js"></script>
    <script src="/thinkcmf/public/static/js/frontend.js"></script>
	<script>
	$(function(){
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$("#main-menu a").each(function() {
			if ($(this)[0].href == String(window.location)) {
				$(this).parentsUntil("#main-menu>ul>li").addClass("active");
			}
		});
		
		$.post("<?php echo url('user/index/isLogin'); ?>",{},function(data){
		    console.log(data);
			if(data.code==1){
				if(data.data.user.avatar){
				}

				$("#main-menu-user span.user-nickname").text(data.data.user.user_nickname?data.data.user.user_nickname:data.data.user.user_login);
				$("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

			}

			if(data.code==0){
                $("#main-menu-user li.login").hide();
				$("#main-menu-user li.offline").show();
			}

		});

        ;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


<?php 
    \think\Hook::listen('before_body_end',$temp5ad2a30c4b8e8,null,false);
 ?>
</body>
</html>
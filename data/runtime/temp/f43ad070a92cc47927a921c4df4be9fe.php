<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wwwroot\htdocs\thinkcmf\public/plugins/system_info/view/widget.html";i:1516676889;}*/ ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo lang('SYSTEM_INFORMATIONS'); ?></h3>
    </div>
    <div class="panel-body home-info">
        <ul class="list-unstyled">
            <?php if(is_array($server_info) || $server_info instanceof \think\Collection || $server_info instanceof \think\Paginator): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li><em><?php echo $key; ?></em> <span><?php echo $vo; ?></span></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
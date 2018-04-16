<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"themes/admin_simpleboot3/admin\theme\file_widget_setting.html";i:1516676889;s:85:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\admin\theme\functions.html";i:1516676889;s:77:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\public\header.html";i:1516676889;s:83:"C:\wwwroot\htdocs\thinkcmf\public\themes\admin_simpleboot3\admin\theme\scripts.html";i:1516676889;}*/ ?>
<?php 
    function _parse_vars($vars,$inputName,$level=1,$widget=''){

 if(is_array($vars) || $vars instanceof \think\Collection || $vars instanceof \think\Paginator): if( count($vars)==0 ) : echo "" ;else: foreach($vars as $varName=>$var): ?>
    <fieldset>
        <div class="form-group">
            <?php if(isset($var['title'])): ?>
                <label class="control-label">
                    <?php echo $var['title']; if(!(empty($var['rule']['require']) || (($var['rule']['require'] instanceof \think\Collection || $var['rule']['require'] instanceof \think\Paginator ) && $var['rule']['require']->isEmpty()))): ?>
                        <span class="form-required">*</span>
                    <?php endif; ?>
                </label>
            <?php endif; switch($var['type']): case "text": ?>
                    <div class="controls">
                        <?php if(isset($var['dataSource'])): ?>
                            <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>_text_]" class="form-control"
                                   onclick="doSelectData(this)"
                                   data-source="<?php echo base64_encode(json_encode($var['dataSource'])); ?>"
                                   data-title="请选择<?php echo $var['title']; ?>"
                                   value="<?php echo (isset($vars[$varName]['valueText']) && ($vars[$varName]['valueText'] !== '')?$vars[$varName]['valueText']:''); ?>">
                            <input type="hidden" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                                   value="<?php echo $vars[$varName]['value']; ?>">
                            <?php else: ?>
                            <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                                   value="<?php echo $vars[$varName]['value']; ?>">
                        <?php endif; if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "textarea": ?>
                    <div class="controls">
                        <textarea name="<?php echo $inputName; ?>[<?php echo $varName; ?>]"
                                  class="form-control"><?php echo $vars[$varName]['value']; ?></textarea>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "date": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control js-bootstrap-date"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "datetime": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control js-bootstrap-datetime"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "image": ?>
                    <div class="controls">
                        <input type="hidden" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>" id="js-<?php echo $widget; ?><?php echo $varName; ?>-input">
                        <div>
                            <a href="javascript:uploadOneImage('图片上传','#js-<?php echo $widget; ?><?php echo $varName; ?>-input');">
                                <?php if(empty($vars[$varName]['value'])): ?>
                                    <img src="/thinkcmf/public/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                         id="js-<?php echo $widget; ?><?php echo $varName; ?>-input-preview"
                                         width="135" style="cursor: pointer"/>
                                    <?php else: ?>
                                    <img src="<?php echo cmf_get_image_preview_url($vars[$varName]['value']); ?>"
                                         id="js-<?php echo $widget; ?><?php echo $varName; ?>-input-preview"
                                         width="135" style="cursor: pointer"/>
                                <?php endif; ?>
                            </a>
                            <?php if(!empty($vars[$varName]['value'])): ?>
                                <br>
                                <button id="js-<?php echo $widget; ?><?php echo $varName; ?>-button-remove" defaultImage="/thinkcmf/public/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" class="removeImage btn btn-sm" type="button" onclick="removeImage('<?php echo $widget; ?><?php echo $varName; ?>')">取消图片</button>
                            <?php endif; ?>
                        </div>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "number": ?>
                    <div class="controls">
                        <input type="number" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "location": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>_text_]" class="form-control"
                               onclick="doSelectLocation(this)"
                               data-title="请选择<?php echo $var['title']; ?>"
                               value="<?php echo (isset($vars[$varName]['valueText']) && ($vars[$varName]['valueText'] !== '')?$vars[$varName]['valueText']:''); ?>">
                        <input type="hidden" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "file": ?>
                    <div class="controls">
                        <div class="input-group">
                            <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                                   value="<?php echo $vars[$varName]['value']; ?>" id="js-<?php echo $widget; ?><?php echo $varName; ?>-input-file">
                            <span class="input-group-addon"> <a href="javascript:uploadOne('图片上传','#js-<?php echo $widget; ?><?php echo $varName; ?>-input-file','file');">上传</a></span>
                        </div>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "color": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control js-color"
                               value="<?php echo $vars[$varName]['value']; ?>" id="js-color-<?php echo $widget; ?><?php echo $varName; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "array": ?>
                    <div class="controls">
                        <?php 
                            $arrayValueText=is_array($var['value'])&&count($var['value'])>0?count($var['value']).'条数据,点击添加更多...':'';
                         ?>
                        <textarea class="form-control" placeholder="点击添加数据"
                                  onclick="doEditArrayData(this)"
                                  data-var="<?php echo $varName; ?>"
                                  data-widget="<?php echo $widget; ?>"
                                  data-title="编辑<?php echo $var['title']; ?>"><?php echo $arrayValueText; ?></textarea>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "select": ?>
                    <div class="controls">
                        <?php 
                            $value= $vars[$varName]['value'];
                            $options = $vars[$varName]['options'];
                         ?>
                        <select name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control">
                            <?php if(is_array($options) || $options instanceof \think\Collection || $options instanceof \think\Paginator): if( count($options)==0 ) : echo "" ;else: foreach($options as $optionKey=>$optionItem): $optionSelected=$optionKey==$value?"selected":""; ?>
                                <option value="<?php echo $optionKey; ?>" <?php echo $optionSelected; ?>><?php echo $optionItem; ?>
                                </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; case "slide": ?>
                    <div class="controls">
                        <input type="text" name="<?php echo $inputName; ?>[<?php echo $varName; ?>]" class="form-control"
                               value="<?php echo $vars[$varName]['value']; ?>">
                        <?php if(isset($var['tip'])): ?>
                            <p class="help-block"><?php echo $var['tip']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php break; endswitch; ?>
        </div>
    </fieldset>
<?php endforeach; endif; else: echo "" ;endif; 
    }
 ?>
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
<style>
    .form-control-widget-title {
        border: none;
        padding: 0;
        margin: 0;
        font-size: inherit;
        line-height: inherit;
        background: transparent;
    }

    .form-control-widget-title:focus {
        outline: none;
        background: #fff;
    }
</style>
</head>
<body>
<div class="wrap">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="<?php echo url('theme/fileSetting',['file_id'=>$file_id,'tab'=>'widget']); ?>">
                组件设置
            </a>
        </li>
        <li>
            <a href="<?php echo url('theme/fileSetting',['file_id'=>$file_id,'tab'=>'var']); ?>">
                变量设置
            </a>
        </li>
    </ul>
    <form method="post" class="js-ajax-form  margin-top-20" action="<?php echo url('theme/settingPost'); ?>">
        <?php if(!(empty($file['more']['widgets']) || (($file['more']['widgets'] instanceof \think\Collection || $file['more']['widgets'] instanceof \think\Paginator ) && $file['more']['widgets']->isEmpty()))): ?>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php if(is_array($file['more']['widgets']) || $file['more']['widgets'] instanceof \think\Collection || $file['more']['widgets'] instanceof \think\Paginator): if( count($file['more']['widgets'])==0 ) : echo "" ;else: $index=0; foreach($file['more']['widgets'] as $widgetName=>$widget): ++$index; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!--<a role="button" data-toggle="collapse" data-parent="#accordion"-->
                            <!--href="#collapse-<?php echo $widgetName; ?>">-->
                            <!--<?php echo $widget['title']; ?>-->
                            <!--</a>-->
                            <input class="form-control-widget-title" type="text" value="<?php echo $widget['title']; ?>"
                                   name="widget[<?php echo $widgetName; ?>][title]">
                            <label class="checkbox-inline pull-right">
                                <?php $display_checked=empty($widget['display'])?'':'checked'; ?>
                                <input type="checkbox" name="widget[<?php echo $widgetName; ?>][display]" value="1"
                                       <?php echo $display_checked; ?>>
                                显示
                            </label>
                        </div>
                        <div id="collapse-<?php echo $widgetName; ?>" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <?php echo _parse_vars($widget['vars'],'widget_vars['.$widgetName.']',1,$widgetName); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <?php else: ?>
            <div>本页面没有设置任何组件</div>
        <?php endif; ?>
        <div class="form-group" style="display:none;">
            <input type="hidden" name="id" value="<?php echo $file['id']; ?>">
            <button type="submit" class="btn btn-primary js-ajax-submit" id="submit-btn"><?php echo lang('SAVE'); ?></button>
        </div>
    </form>
</div>
<script src="/thinkcmf/public/static/js/admin.js"></script>
<script>

    Wind.use('colorpicker',function(){
        $('.js-color').each(function () {
            var $this=$(this);
            $this.ColorPicker({
                livePreview:true,
                onChange: function(hsb, hex, rgb) {
                    $this.val('#'+hex);
                },
                onBeforeShow: function () {
                    $(this).ColorPickerSetColor(this.value);
                }
            });
        });

    });

    function doSelectData(obj) {
        var $obj              = $(obj);
        var $realInput        = $obj.next();
        var selectedObjectsId = $realInput.val();
        var dataSource        = $obj.data('source');
        var title             = $obj.data('title');
        parent.openIframeLayer("<?php echo url('theme/dataSource'); ?>?ids=" + selectedObjectsId + '&data_source=' + dataSource, title, {
            area: ['95%', '90%'],
            btn: ['确定', '取消'],
            yes: function (index, layero) {
                var iframeWin       = parent.window[layero.find('iframe')[0]['name']];
                var selectedObjects = iframeWin.confirm();
                if (selectedObjects.selectedObjectsId.length == 0) {
                    layer.msg('您没有选择任何数据!');
                    return;
                }
                $realInput.val(selectedObjects.selectedObjectsId.join(','));
                $obj.val(selectedObjects.selectedObjectsName.join(','));
                parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
            }
        });
    }

    function doEditArrayData(obj) {
        var $obj   = $(obj);
        var mVar   = $obj.data('var');
        var title  = $obj.data('title');
        var widget = $obj.data('widget');
        widget     = widget ? '&widget=' + widget : '';

        parent.openIframeLayer(
            "<?php echo url('theme/fileArrayData'); ?>?tab=<?php echo $tab; ?>&file_id=<?php echo $file_id; ?>&" + 'var=' + mVar + widget,
            title,
            {
                area: ['95%', '90%'],
                btn: ['确定', '取消'],
                yes: function (index, layero) {
                    var iframeWin       = parent.window[layero.find('iframe')[0]['name']];
                    var result=iframeWin.confirm();

                    if(result){
                        parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
                    }

                }
            }
        );
    }

    function doSelectLocation(obj) {
        var $obj       = $(obj);
        var title      = $obj.data('title');
        var $realInput = $obj.next();
        var location   = $realInput.val();

        parent.openIframeLayer(
            "<?php echo url('dialog/map'); ?>?location=" + location,
            title,
            {
                area: ['95%', '90%'],
                btn: ['确定', '取消'],
                yes: function (index, layero) {
                    var iframeWin = parent.window[layero.find('iframe')[0]['name']];
                    var location  = iframeWin.confirm();
                    $realInput.val(location.lng + ',' + location.lat);
                    $obj.val(location.address);
                    parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
                }
            }
        );
    }

    function confirm() {
        $('#submit-btn').click();
    }

    function removeImage(wigetVarName) {
        //需要定位input和image
        //清空Input
        $('#js-'+wigetVarName+'-input').val('');
        //修改Image为原图。
        var defaultImage = $('#js-'+wigetVarName+'-button-remove').attr('defaultImage');
        $('#js-'+wigetVarName+'-input-preview').attr('src',defaultImage);
        //移除自身
        $('#js-'+wigetVarName+'-button-remove').remove();

    }

</script>
</body>
</html>
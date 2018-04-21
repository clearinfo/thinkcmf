<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\wwwroot\htdocs\thinkcmf\public/plugins/react/view/admin_index.html";i:1524314747;s:69:"C:\wwwroot\htdocs\thinkcmf\public\plugins\react\view\public\head.html";i:1524145168;s:68:"C:\wwwroot\htdocs\thinkcmf\public\plugins\react\view\public\vue.html";i:1524145168;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<link rel="shortcut icon" href="/thinkcmf/public/plugins/react/view/public/assets/images/favicon.ico" type="image/x-icon">

<link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
<link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
<link href="/thinkcmf/public/static/font-awesome/css/font-awesome.min.css?page=index" rel="stylesheet" type="text/css">

<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/thinkcmf/public/",
        WEB_ROOT: "/thinkcmf/public/",
        JS_ROOT: "static/js/"
    };
</script>
    <title>React首页</title>
    <meta name="description" content="ThinkCMF插件演示首页">
    <meta name="keywords" content="ThinkCMF插件演示首页">
    <link rel="stylesheet" type="text/css" href="/thinkcmf/public/static/iview/styles/iview.css">
<script type="text/javascript" src="/thinkcmf/public/static/js/jquery.js"></script>
<script type="text/javascript" src="/thinkcmf/public/static/vue/vue.min.js"></script>
<script type="text/javascript" src="/thinkcmf/public/static/iview/iview.min.js"></script>
<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
<script src="/thinkcmf/public/static/vue/axios.min.js"></script>
</head>

<body>
    <div class="wrap js-check-wrap">
        <ul class="nav nav-tabs">
            <li class="active"><a href="<?php echo cmf_plugin_url('React://AdminIndex/index'); ?>">应用管理</a></li>
            <li><a href="<?php echo cmf_plugin_url('React://AdminIndex/filelist'); ?>">添加应用</a></li>
        </ul>
        <div class="common-form">
            <div class="well">
                <p>
                    <b>当前登录管理员id:</b><?php echo (isset($admin_id) && ($admin_id !== '')?$admin_id:'管理员未登录'); ?>
                </p>
                <p>
                    <b>插件根目录:</b>/thinkcmf/public/plugins/react
                </p>
                <p>
                    <b>插件模板根目录:</b>/thinkcmf/public/plugins/react/view
                </p>
            </div>
            <div class="table_list">
                <table width="100%" class="table table-hover">
                    <thead>
                        <tr>
                            <th width="80">项目ID</th>
                            <th>页面名称</th>
                            <th>文件名称</th>
                            <th>文件后缀</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($filelist) || $filelist instanceof \think\Collection || $filelist instanceof \think\Paginator): if( count($filelist)==0 ) : echo "" ;else: foreach($filelist as $key=>$vo): ?>
                            <tr>
                                <td><?php echo $vo['gid']; ?></td>                                
                                <td><?php echo $vo['descoration']; ?></td>
                                <td><?php echo $vo['filename']; ?></td>
                                <td><?php echo $vo['postfixname']; ?></td>
                                <td>
                                    <a href="<?php echo cmf_plugin_url('React://AdminIndex/prop',array('rid'=>$vo['id'],'filename'=>$vo['filename'])); ?>">属性管理</a>|
                                    <a href="javascript:;">应用管理</a>|
                                    <a href="<?php echo cmf_plugin_url('React://AdminIndex/vue',array('rid'=>$vo['id'],'filename'=>$vo['filename'])); ?>">生成文件</a>|
                                    <a href="javascript:;">修改</a>|
                                    <a href="javascript:;" class="js-ajax-delete">删除</a>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
            <form method="post" class="js-ajax-form" action="#">
                <div class="table_list">
                    <table width="100%" class="table table-hover">
                        <thead>
                            <tr>
                                <th width="50">ID</th>
                                <th>用户</th>
                                <th>邮箱</th>
                                <th>创建时间</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($users) || $users instanceof \think\Collection || $users instanceof \think\Paginator): if( count($users)==0 ) : echo "" ;else: foreach($users as $key=>$vo): ?>
                                <tr>
                                    <td><?php echo $vo['id']; ?></td>
                                    <td><?php echo $vo['user_login']; ?></td>
                                    <td><?php echo $vo['user_email']; ?></td>
                                    <td><?php echo $vo['create_time']; ?></td>
                                    <td>
                                        <a href="javascript:;">修改</a>|
                                        <a href="javascript:;" class="js-ajax-delete">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <div id="app">
                <!-- vue -->
                <!--             
    <Modal v-model="visible" title="Welcome">Welcome to iView</Modal> -->
                <i-button type="primary" @click="add">创建Vue.js模板</i-button>
                <p>&nbsp;</p>
                <i-form ref="formInline" :model="formItem" :label-width="80">                    
                    <form-item label="参数名称">
                        <i-input v-model="formItem.name_en" name="name_en" placeholder="以字母开头"></i-input>
                        <span>当前值：{{formItem.name_en}}</span>
                    </form-item>
                    <form-item label="参数备注">
                        <i-input v-model="formItem.name_zh" placeholder="中文名称，用于注释和表单名称"></i-input>
                    </form-item>
                    <form-item label="表单类型">
                        <i-select v-model="formItem.formtype" name="formtype">
                            <i-option v-for="item in formtypeData" :value="item.value">{{item.label}}</i-option>
                        </i-select>
                    </form-item>
                    <form-item label="数值类型">
                        <i-select v-model="formItem.valtype" name="valtype">
                            <i-option v-for="item in valueData" :value="item.value">{{item.label}}</i-option>
                        </i-select>
                    </form-item>
                    <form-item label="默认数值">
                        <i-input v-model="formItem.values" name="values" placeholder="默认为空"></i-input>
                    </form-item>                    
                    <form-item>                        
                        <input type="button" class="ivu-btn ivu-btn-submit" @click="handleSubmit('formInline')" value="提交">
                    </form-item>
                </i-form>
                <!-- vue end -->
            </div>
        </div>
    </div>
    <script>
    new Vue({
        el: '#app',
        data: {
            visible: false,
            valueData: [{
                label: "字符型",
                value: "0"
            }, {
                label: "数组型",
                value: "1"
            }, {
                label: "布尔型",
                value: "2"
            }],
            formtypeData: [{
                label: "输入框",
                value: "0"
            }, {
                label: "单选",
                value: "1"
            }, {
                label: "多选",
                value: "2"
            }, {
                label: "开关",
                value: "3"
            }, {
                label: "选择器",
                value: "4"
            }, {
                label: "日期选择器",
                value: "5"
            }, {
                label: "上传",
                value: "6"
            }],
            formItem: {
                name_en: '',
                name_zh: '',
                formtype: '0',
                valtype: '0',
                values: '',
                
            }
        },
        methods: {
            show: function() {
                this.visible = true;
            },
            add:function(){
                window.location.href='add.html'
            },
            handleSubmit(name) {
                var s = this;
                console.log("test",this.formItem)
                this.$refs[name].validate((valid) => {
                    if (valid) {
                        this.$Message.success('Success!');
                    } else {
                        this.$Message.error('Fail!');
                    }
                })
                axios({
                    method:'get',
                    url:'<?php echo cmf_plugin_url('React://AdminIndex/addPost'); ?>',
                    params:{
                        name_en: s.formItem.name_en,
                        name_zh: s.formItem.name_zh,
                        formtype: s.formItem.formtype,
                        valtype: s.formItem.valtype,
                        values: s.formItem.values,
                    }
                }).then(function(resp){
                    console.log(resp.data);
                }).catch(resp => {
                    console.log('请求失败：'+resp.status+','+resp.statusText);
                });

            }
        }
    })
    </script>
</body>

</html>
<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小夏 < 449134904@qq.com>
// +----------------------------------------------------------------------
namespace plugins\react\validate;

use think\Validate;

class AdminReactValidate extends Validate
{
    protected $rule = [
        // 用|分开
        'name_en'       => 'require',
        'name_zh'     => 'require',
        'formtype' => 'require'
    ];

    protected $message = [
        'name_en.require'       => "英文名称不能为空！",
        'name_zh.require'     => "中文名称不能为空!",
        'formtype.require' => '表单类型不能为空!'
    ];


}
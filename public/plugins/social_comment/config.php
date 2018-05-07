<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <code-tech.diandian.com>
// +----------------------------------------------------------------------

return array(
	'comment_type'=>array(
		'title'=>'使用类型:',
		'type'=>'select',		 
		'options'=>array(
			'1'=>'畅言',
			'2'=>'友言',
		),
		'value'=>'1',			 
	),
	'group'=>array(
		'type'=>'group',
		'options'=>array(
			'duoshuo'=>array(
				'title'=>'畅言配置',
				'options'=>array(
					'appid'=>array(
						'title'=>'appid',
						'type'=>'text',
						'value'=>'',
						'tip'=>'畅言appid'
					),
					'conf'=>array(
						'title'=>'conf',
						'type'=>'text',
						'value'=>'',
						'tip'=>'畅言conf'
					),
				    'display'   => [
				        'title'   => '畅言中心',
				        'type'    => 'select',
				        'options' => [//select 和radio,checkbox的子选项
				        	'0' => '关闭',
				            '1' => '显示',
				        ],
				        'value'   => '0',
				        'tip'     => '显示或关闭畅言中心'
				    ],
				)
			),
			'youyan'=>array(
				'title'=>'友言配置',
				'options'=>array(
					'comment_uid_youyan'=>array(
						'title'=>'账号id:',
						'type'=>'text',
						'value'=>'2136100',
						'tip'=>'填写自己登录友言后的uid,填写后可进相应官方后台'
					),
				)
			)
		)
	)
);

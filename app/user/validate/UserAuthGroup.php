<?php

namespace app\user\validate;

use think\Validate;

class UserAuthGroup extends Validate
{
    protected $rule = [
        'name' => 'require',
    ];

    protected $message = [
        'name.require' => '用户组不能为空',
    ];
}

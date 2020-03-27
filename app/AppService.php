<?php
declare (strict_types=1);

namespace app;

use app\index\service\User;
use think\Service;

/**
 * 应用服务类
 */
class AppService extends Service
{
    public function register()
    {
        // 服务注册
        $this->app->bind('User', User::class);

    }

    public function boot()
    {
        // 服务启动
        User::showVar();
//        User::setVar('456');
    }
}

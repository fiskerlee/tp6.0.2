<?php
declare (strict_types=1);

namespace app\index\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        echo $this->app->getThinkPath();
        View::engine('Think')->display('1');
    }

}

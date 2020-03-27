<?php
declare (strict_types=1);

namespace app\index\listener;

use app\index\event\User as UserEvent;

class User
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle(UserEvent $user)
    {
//       echo date('Y年m月d日H时i分s秒', $user->data['login_time'] = time())."<hr>";
//       return ;
    }
}

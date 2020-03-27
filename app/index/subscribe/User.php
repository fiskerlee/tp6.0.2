<?php
declare (strict_types=1);

namespace app\index\subscribe;


class User
{
    public function onindex()
    {
        echo '我是onindex';
    }

    public function onisLogin()
    {
        echo '我是onisLogin';
    }

    public function onoutLogin()
    {
        echo '我是onoutLogin';
    }

    public function oninLogin()
    {
        echo '我是onoutLogin';
    }
}

<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Fisker.Lee <fisker2008@163.com> | 2020/3/4 | 17:22 | User.php
// +----------------------------------------------------------------------
// |     
// |
// |
// +----------------------------------------------------------------------

namespace app\index\service;


class User
{
    protected static string $name = '张无忌';

    public static function setVar($name)
    {
        return self::$name = $name;
    }

    public static function showVar($name = '')
    {
        return empty($name) ? self::$name : self::setVar($name);
    }
//
//    public function __call($name, $arguments)
//    {
//        if (is_callable($this->$name)) {
//            return call_user_func($this->$name, $arguments);
//        } else {
//            throw \RuntimeException('调用的方法不存在');
//        }
//    }
//
//    public function __set($name, $value)
//    {
//        $this->$name = is_callable($value)?
//                       $this->bindTo($this,$this):
//                       $value;
//    }

}
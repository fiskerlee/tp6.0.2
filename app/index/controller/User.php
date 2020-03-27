<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Fisker.Lee <fisker2008@163.com> | 2020/3/5 | 11:47 | User.php
// +----------------------------------------------------------------------
// |     
// |
// |
// +----------------------------------------------------------------------
namespace app\index\controller;

use app\BaseController;
use app\index\model\Admin as UM;
use think\facade\View;

class User extends BaseController
{
    protected string $a;

    protected array $b = [
        'a' => '1',
        '2',
        '3',
        '4',
        '5'
    ];

    protected string $str = '张里是独立房间撒地方拉萨的离开房间啊克里斯蒂法律上的技法卢卡斯浪费大家来到撒娇地方受到了看见分列式搭街坊拉萨的肌肤';

    protected array $c;

    public function index()
    {
        if (count($this->c) == 2) {
            return '美好的一天 beautiful day' . $this->c[0] . $this->c[1];
        }
        echo '1';
        dump($this->c ?? null);
        phpinfo();
    }

    public function hello()
    {
        $id = $this->request->param('id');
        $name = $this->request->param('name');
        $this->c = [$name, $id];
        echo $this->index();
    }

    public function rand_substring_to_name()
    {
        echo mb_strlen($this->str);
        for ($i = 0; $i < 100; $i++) {
            echo $name = mb_substr($this->str, rand(0, mb_strlen($this->str)), rand(1, 4));
            echo mb_strwidth($name) + rand(10, 30);
        }
    }

    public function print()
    {
        halt($this->app);
        $users = UM::name('admin')->where('id', '>', '4')->select();
        $pages = UM::name('admin')->where('name', 'admin')->paginate(10);
        View::assign('users', $users);
        View::assign('pages', $pages);
        return View::fetch('', ['time' => time()]);
    }

    // 多维数组转字符串输出
    public function arrToString($array = '')
    {
        static $i = 0;
        foreach ($array as $k => $arr) {
            if (is_array($arr)) {
                self::arrToString($arr);
            } else {
                echo $i += 1;
                echo '<hr>';
                echo "原素组索引：$k ，值：$arr<hr>";
            }
        }
        return $i;
    }

    // 多维数组转字符串输出
    public function test()
    {
        dump($this->app->getAppPath());
        static $tar_new = array();
        $target = [1, 2, 3, 4, 5, 1, 2, 3, 4, 5];
        $target_1 = [1 => [3, 2, 1], 2, 3, 4, 5, 1, 2, 3, 4, 5];
        $target_2 = [1 => [3, 2, [5, 4, 2, 1]], 2, 3, 4, 5, 1, 2, 3, 4, 5];

//        $arr = function ($pieces, $glue) use (&$arr) {
//            return is_array($pieces) ?
//                implode($glue, array_map($arr, $pieces, array_fill(0, count($pieces), $glue))) :
//                $pieces;
//        };

        $arr = function ($pieces) use (&$arr, $glue) {
            return is_array($pieces) ?
                implode($glue, array_map($arr, $pieces)) :
                $pieces;
        };
        echo $arr($target_2, ',');
        echo $this->arrToString($target_2);
    }


}

<?php
/**
 * Created by Phpstorm
 * User HHj
 * Date 2020/5/12
 * Time 11:34 下午
 */

namespace App\Utils;


class CommonFunc
{
    protected $app;
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * 获取树
     * @param $data
     * @param int $upid
     * @param int $level
     * @param int $maxLevel
     * @return array
     */
    public function getTree($data, $upid=1, $level=0, $maxLevel=4)
    {
        $tree = [];
        $level = $level + 1;
        foreach ($data as $key=>$val) {
            if ($val['upid'] == $upid) {
                unset($data[$key]);
                if ($level < $maxLevel) { //最后一层无需遍历
                    $child = $this->getTree($data, $val['id'], $level);
                }
                !empty($child) && $val['childrens'] = $child;
                unset($val['upid'], $val['type']);
                $tree[] = $val;
            }
        }
        return $tree;
    }
}

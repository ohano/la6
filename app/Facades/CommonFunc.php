<?php
/**
 * Created by Phpstorm
 * User HHj
 * Date 2020/5/12
 * Time 11:30 下午
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * @method static bool getTree($data, $upid=1, $level=1, $maxLevel=4)
 *
 * @see \App\Utils\CommonFunc
 */
class CommonFunc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'CommonFunc';
    }
}

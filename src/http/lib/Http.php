<?php
/**
 * Created by PhpStorm.
 * User: 宝宝
 * Date: 2018/10/30
 * Time: 16:31
 */

namespace huxuebao\http;


class Http
{
    public static function requestByGet($url)
    {
        return file_get_contents($url);
    }
}
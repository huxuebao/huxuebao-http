<?php
/**
 * Created by PhpStorm.
 * User: 宝宝
 * Date: 2018/10/30
 * Time: 16:37
 */
// 全局自动加载
require_once __DIR__ . '/vendor/autoload.php';
var_dump(strlen(\huxuebao\http\Http::requestByGet('http://github.com')));

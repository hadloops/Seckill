<?php
/**
 * Created by PhpStorm.
 * User: ziniu
 * Date: 2016/6/2
 * Time: 15:50
 */
namespace jingshan;
include_once 'lib/Mredis.class.php';
$Mredis = new Mredis();
$v = $Mredis->get_value();
$v = array_map(function($a){
	return unserialize($a);
},$v);

var_dump($v);

//var_dump(new Redis());


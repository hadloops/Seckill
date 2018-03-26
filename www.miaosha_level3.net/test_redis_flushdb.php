<?php
/**
 * Created by PhpStorm.
 * User: ziniu
 * Date: 2016/8/24
 * Time: 11:19
 */
namespace jingshan;
include_once 'lib/Mredis.class.php';
$Mredis = new Mredis();
echo $Mredis->deleteall();
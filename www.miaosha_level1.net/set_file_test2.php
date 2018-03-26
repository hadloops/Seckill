<?php
/**
 * Created by PhpStorm.
 * User: ziniu
 * Date: 2016/5/20
 * Time: 10:52
 */
// 第一步：删除文件
$file_path = 'div.txt';
$f = file_exists($file_path) && unlink($file_path);

// 第二步：生成自己需要的文件
$file_path = 'div.txt';
$myfile = fopen($file_path, "w");

// 获取文件内容
$file_path = 'div_sale.txt';
$txt = file_get_contents($file_path);
fwrite($myfile, $txt);
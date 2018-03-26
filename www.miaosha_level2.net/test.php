<?php
/**
 * Created by PhpStorm.
 * User: ziniu
 * Date: 2016/8/24
 * Time: 10:28
 */
// 数据准备
$url_level3 = 'http://level3.5ihy.com/';
$result = array();


$ch = curl_init();//初始化 GET 方式
for($i=1;$i<=1008;$i++){
	$data = array(
		'phone'=>'1388042'.substr('000000000'.$i,-4),
		'number'=>'177022-879765-97143-979171'
	);
	$url = $url_level3.'?callback=success_jsonpCallback&phone='.$data['phone'].'&number='.$data['number'].'&_='.time();
	curl_setopt($ch, CURLOPT_URL, $url);//设置选项，包括URL
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//设置 返回信息状态 false 会直接输出到页面
	curl_setopt($ch, CURLOPT_HEADER, 0);// 0 表示不包含 输出头信息
	$result[] = curl_exec($ch);//执行并获取HTML文档内容

}
curl_close($ch);//释放curl句柄

echo "send over";
echo "<pre/>";
var_dump($result);
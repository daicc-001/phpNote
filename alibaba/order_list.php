<?php


#拼接获取Code的URL

$url='http://gw.api.alibaba.com/openapi';

$appKey='3937604';

$appSecret ='0RsvFZYVQd';

#回调URL

$redirectUrl = 'http://amazon_object.com/api/request/requestlog';

#生成签名

$code_arr = array(

    'client_id' => $appKey,

    'redirect_uri' => $redirectUrl,

    'site' => '1688',

    'access_token'=>'48a2102c-0b42-483d-a375-8d0f1419423a'

);

ksort($code_arr);

$sign_str = '';

foreach ($code_arr as $key=>$val){

    $sign_str .= $key . $val;

}

$code_sign = strtoupper(bin2hex(hash_hmac("sha1", $sign_str, $appSecret, true)));

echo $code_sign;exit;
$get_code_url = 'http://gw.api.alibaba.com/auth/authorize.htm?client_id='.$appKey.'&site=1688&redirect_uri='.$redirectUrl.'&_aop_signature='.$code_sign;
echo $get_code_url;



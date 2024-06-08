<?php
//액세스 토큰 발급
$url = "https://api.instagram.com/oauth/access_token";
$post_array = array(
    'client_id'=>'461648149214952',
    'client_secret'=>'50ddb318f25398e50f9f362b1ed4882e',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'https://www.lidot.co.kr/',
    'code'=>'IGQVJWbnFpZAGNLRmNSZAUhIdGgyTjRnQlZAmRkNJeTVueVdyR3VmWnZAyWktmNnZAsamsycDY0ak1QaV9NMmRtN014cmw2U1dORUxzU2ZATWS1RenBKbE1QaGxzZAEp1aF9aR29OSWMtd1AtX29Gd0xKaTB1eAZDZD'
);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST,true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_array);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
print_r($result);
?>

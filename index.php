<?php
$access_token = 'KtG6cn7tXPONQGU3OY4P4V+hC1MZl5Surcur2JjB7QkU+2eLXDpmJxCpV0F82RIZy+UxaR7eQ2OBFh90z/HTTr6YcHvWXrkIL2TGHfidKVuxY5d21Zzr0ddQ1xns9+sNjd6kvlV0Ccf4s7gA5TJ4WwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

<?php

// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console
//Set Key
$sSecretKey = 'ChatBot15chatBot';
$json = '{
"productid": "0887511204",
"page": "invoicehistory",
"channel": "chatbot",
"lang": "th"
}';
$encrypt = fnEncrypt($json, $sSecretKey);
echo $encrypt;

function fnEncrypt($sValue, $sSecretKey)
{
    $iv = base64_decode('Jc8EZ9nZPbWZEoV4ad8/CQ==');
    $sValue = pkcs5_pad($sValue, mcrypt_get_block_size(MCRYPT_RIJNDAEL_128,
    MCRYPT_MODE_CBC));
    $sValue = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $sSecretKey, $sValue,
    MCRYPT_MODE_CBC, $iv);
    $sValue = base64_encode($sValue); return $sValue;
}

function pkcs5_pad($text, $blocksize) {
    $pad = $blocksize - (strlen($text) % $blocksize); $pad2 = $text . str_repeat(chr($pad), $pad); return $pad2;
}

?>


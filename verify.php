<?php
$access_token = '8GlfmVUKnprI71gm4b7UmgsAGk+uGX8Osq3Q+NJAqRG2Ogr0Zkpgc42TTrERy+eQHKpDcljzll+B/QjKgT+laG1IBmWzkpPRGM3bxOYUOSUmg//COK4vasfqJTlQ1P7WEFmgpLDzjbvR3Qiop9JMbQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

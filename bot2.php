$composer require linecorp/line-bot-sdk

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('8GlfmVUKnprI71gm4b7UmgsAGk+uGX8Osq3Q+NJAqRG2Ogr0Zkpgc42TTrERy+eQHKpDcljzll+B/QjKgT+laG1IBmWzkpPRGM3bxOYUOSUmg//COK4vasfqJTlQ1P7WEFmgpLDzjbvR3Qiop9JMbQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$response = $bot->replyText('<reply token>', 'hello!');

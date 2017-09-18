$composer require linecorp/line-bot-sdk

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$response = $bot->replyText('<reply token>', 'hello!');

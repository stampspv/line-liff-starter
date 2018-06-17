<?


$api_url = 'https://api.line.me/v2/bot/user/U216566c778cf0a50ae0b8e87cd71fe04/linkToken';
$accessToken = 'HckYQU7o6y6Fbtm886GA4qLdAaO3Ik3Ho657LkWiNvC+J4Xa+YBWOZhPDGR2fhvZihfOrlPAosEfgQdwOF3DQHd5Jhc6GWFALc5o9FC/zDLPWN5+UrSwqhNxwgquDAfuxnENMA/US/jFpQy4l/NB8QdB04t89/1O/w1cDnyilFU=';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.line.me/v2/bot/user/U216566c778cf0a50ae0b8e87cd71fe04/linkToken");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer '.$accessToken
));
$server_output = curl_exec ($ch);

curl_close ($ch);

print  $server_output ;
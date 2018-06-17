<?


$api_url = 'https://api.line.me/v2/bot/user/U216566c778cf0a50ae0b8e87cd71fe04/linkToken';
$accessToken = 'HckYQU7o6y6Fbtm886GA4qLdAaO3Ik3Ho657LkWiNvC+J4Xa+YBWOZhPDGR2fhvZihfOrlPAosEfgQdwOF3DQHd5Jhc6GWFALc5o9FC/zDLPWN5+UrSwqhNxwgquDAfuxnENMA/US/jFpQy4l/NB8QdB04t89/1O/w1cDnyilFU=';

$v = Array(
    'Authorization: Bearer '.$accessToken
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, trim($api_url));
//curl_setopt($ch, CURLOPT_PORT, 80); //ignore explicit setting of port 80
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_HTTPHEADER, $v);
curl_setopt($ch, CURLOPT_VERBOSE, true);

echo curl_exec($ch);
?>
<?


$api_url = 'https://api.line.me/v2/bot/user/U216566c778cf0a50ae0b8e87cd71fe04/linkToken';
$accessToken = 'HckYQU7o6y6Fbtm886GA4qLdAaO3Ik3Ho657LkWiNvC+J4Xa+YBWOZhPDGR2fhvZihfOrlPAosEfgQdwOF3DQHd5Jhc6GWFALc5o9FC/zDLPWN5+UrSwqhNxwgquDAfuxnENMA/US/jFpQy4l/NB8QdB04t89/1O/w1cDnyilFU=';

$v = Array(
    'Proxy-Connection: Close',
    'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1017.2 Safari/535.19',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    'Accept-Language: en-US,en;q=0.8',
    'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.3',
    'Cookie: __qca=blabla',
    'Connection: Close'
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
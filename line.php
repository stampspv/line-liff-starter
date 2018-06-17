<?


$api_url = 'https://api.line.me/v2/bot/user/U216566c778cf0a50ae0b8e87cd71fe04/linkToken';
$accessToken = 'HckYQU7o6y6Fbtm886GA4qLdAaO3Ik3Ho657LkWiNvC+J4Xa+YBWOZhPDGR2fhvZihfOrlPAosEfgQdwOF3DQHd5Jhc6GWFALc5o9FC/zDLPWN5+UrSwqhNxwgquDAfuxnENMA/US/jFpQy4l/NB8QdB04t89/1O/w1cDnyilFU=';
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);


curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer '.$accessToken
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_VERBOSE,1);
$output = curl_exec($ch);
echo "Code:".curl_getinfo($ch, CURLINFO_HTTP_CODE)."<br>";
echo "Error Number:".curl_errno($ch)."<br>";
echo "Error String:".curl_error($ch);
curl_close($ch);
echo $output;
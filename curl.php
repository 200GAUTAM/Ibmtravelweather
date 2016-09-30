<?php



$login = '8690a9f8-ed0f-4ef9-9483-d914222cd4bd';
$password = '5bgirrALV0';
$url = 'https://twcservice.mybluemix.net/api/weather/v1/geocode/33.40/-83.42/forecast/daily/5day.json';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.99 Safari/535.1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
curl_setopt($ch, CURLOPT_VERBOSE,true);
$data = curl_exec($ch);

curl_close($ch);  
echo $data;

?>



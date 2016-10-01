<?php

$x = $_POST['x'];
$y = $_POST['y'];
$city_name = $_POST['city'];


$login = '8690a9f8-ed0f-4ef9-9483-d914222cd4bd';
$password = '5bgirrALV0';
$url = "https://twcservice.mybluemix.net/api/weather/v1/geocode/".$x."/".$y."/forecast/daily/5day.json";
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
$data = json_decode($data, true);
curl_close($ch);  
$code_json =  $data['forecasts']['0']['night']['icon_code'];
$code_url = "weathericons/icon";
$code_png = ".png";
$code = $code_url.$code_json.$code_png;
echo $code_json;
echo $data['forecasts']['0']['night']['narrative'];

//echo $data;
?>

<img src = '<?php echo $code;?>' />
<?php
if(((int)$code_json  >=0 && (int)$code_json<=4) )
{
	echo "Stron stroms we recmmend not to go unless you are GOD";
}

else if(((int)$code_json >=5 && (int)$code_json<=27) || ((int)$code_json >=42 || (int)$code_json<=47))
{
	echo "<img src='rain4.jpg'>";
}

else if((int)$code_json >=28 && (int)$code_json<=31)
{
	echo "mostly clear may be cludy";
}

else if(((int)$code_json >=32 && (int)$code_json<=34) || (int)$code_json ==36)
{
	echo "its a sunny day";
}

else if(((int)$code_json >=37 && (int)$code_json<=41) || (int)$code_json == 35)
{
	echo "rain & suuny";
}



?>

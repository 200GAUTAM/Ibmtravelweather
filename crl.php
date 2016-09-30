<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://twcservice.mybluemix.net/api/weather/v1/geocode/33.40/-83.42/forecast/daily/5day.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"beagle_positive_examples\"\r\n\r\n@beagle.zip\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"pizza_negative_examples\"\r\n\r\n@pizza.zip\r\n-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"name\"\r\n\r\neatable\r\n-----011000010111000001101001--",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic ODY5MGE5ZjgtZWQwZi00ZWY5LTk0ODMtZDkxNDIyMmNkNGJkOjViZ2lyckFMVjA=",
    "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=---011000010111000001101001",
    "postman-token: 030e7da1-df66-2970-cb99-b82611b1f209"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>

<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_POST => true,
  CURLOPT_URL => "https://watson-api-explorer.mybluemix.net/visual-recognition/api/v3/collections/rain_e8fbad/find_similar?api_key=fb15d14aa3605af3751a2172e583657fbdadfbf1&version=2016-05-20",
  //CURLOPT_USERPWD => "USERNAME:PASSWORD",
  CURLOPT_POSTFIELDS => array("image_file" => "@rain2.jpg"),
  CURLOPT_RETURNTRANSFER => true
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

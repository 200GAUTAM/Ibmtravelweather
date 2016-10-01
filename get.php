
<?php
$data = file_get_contents('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=500&type=restaurant&name=cruise&key=AIzaSyCNtOvq2GVCx0bppZoiBzY3LDHqyrUIF9M');
$data = json_decode($data,ture);
echo  sizeof($data['results']);
echo $data['results']['12']['name'];




?>


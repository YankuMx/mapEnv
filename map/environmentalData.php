<?php

var_dump($_POST);


$neLat0= floor($_POST["neLat"]);
$neLng0= floor($_POST["neLng"]);
$swLat0= floor($_POST["swLat"]);
$swLng0= floor($_POST["swLng"]);


echo $neLat0. "<br>";
echo $neLng0. "<br>";
echo $swLat0. "<br>";
echo $swLng0. "<br>";

/*
for($i = 0; $i != 600; $i++)
{
    $final[] = array("type" => "Point", "coordinates" => array(mt_rand(14,32) + mt_rand(11111,99999)/100000, mt_rand(-117,-89) + mt_rand(11111,99999)/100000));
}
    echo json_encode($final);
*/


?>
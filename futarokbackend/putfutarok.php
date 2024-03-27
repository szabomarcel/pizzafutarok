<?php
$putadat = fopen("php://input", "r");
$raw_data = '';
while ($chunk = fread($putdata, 1024))
    $raw_data .= $chunk;
fclose($putadat);
$adatJSON = json_decode($raw_data);
$fazon = $_POST("fazon");
$fnev = $_POST("fnev");
$ftel = $_POST("ftel");
require_once '.databaseconnect.php';
$sql = "UPDATE `futar` SET `fnev`=?, `ftel`=? WHERE fazon=?";
$stml = $connection->prepare($sql);
$stml->bind_Param("ssi", $fnev, $ftel, $fazon);
if($stml->execute()){
    http_response_code(201);
    echo "Sikeres modósitás";
}else{
    http_response_code(404);
    echo "Sikertelen modósítás";
}
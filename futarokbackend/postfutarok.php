<?php
$fazon = $_POST("fazon");
$fnev = $_POST("fnev");
$ftel = $_POST("ftel");
require_once '.databaseconnect.php';
$sql = "INSERT INTO futar (fazon, fnev, ftel) VALUES (?, ?, ?)";
$stml = $connection->prepare($sql);
$stml->bind_Param("iss", $fazon, $fnev, $ftel);
if($stml->execute()){
    http_response_code(201);
    echo "Sikeresen hozzáadva";
}else{
    http_response_code(404);
    echo "Sikertelen hozzáadás";
}
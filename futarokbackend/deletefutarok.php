<?php
$sql = '';
if(count($keresFutar) > 1){
    if(is_int(intval($keresFutar[1]))){
        $sql = 'DELETE FROM futar WHERE fazon=' . $keresFutar[1];
    }else{
        http_response_code(404);
        echo 'Nem, létező futar karbantartó.';    
    }
}
require_once '.databaseconnect.php';
$result = $connection->query($sql);
if($result = $connection->query($sql)){   
    http_response_code(200);
    echo 'Sikeresen lett törölve.';
}else{
    http_response_code(404);
    echo 'Nem lett sikeresen törölve.';
}
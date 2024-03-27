<?php
$sql = '';
if (count($keresFuter) > 1) {
    if (is_int(intval($keresFuter[1]))) {
        $sql = 'SELECT * FROM futar WHERE fazon=' . $keresFuter[1]; 
    } else {
        http_response_code(404);
        echo 'Nem létező ügyfél';
    }
} else {
    $sql = 'SELECT * FROM futar WHERE 1';
}
require_once '.databaseconnect.php';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $futarok = array();
    while ($row = $result->fetch_assoc()) {
        $futarok[] = $row;
    }
    http_response_code(200);
    echo json_encode($futarok);
} else {
    http_response_code(404);
    echo 'Nincs egy ügyfél sem';
}
/*$sql = '';
if(count($keresFuter) > 1){
    if(is_int(intval($keresFuter[1]))){
        $sql = "SELECT * FROM `futar` WHERE fazon=" . $keresFuter[1];
    }else{
        http_response_code(404);
        return json_encode(array("message" => 'Nem létező pizza'));
    }
}else{
    $sql = 'SELECT * FROM futar WHERE 1';
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if($result->num_rows > 0){
    $futarok = array();
    while($row = $result->fetch_assoc()){ 
        $futarok[] = $row;
    }
    http_response_code(200);
    echo json_encode($futarok);
}else{
    http_response_code(404);
    echo 'Me, létező futar karbantartás.';
}*/
<?php
switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        require_once 'futarokbackend/getfutarok.php';
        break;
    case 'POST':
        require_once 'futarokbackend/postfutarok.php';
        break;
    case 'DELETE':
        require_once 'futarokbackend/deletefutarok.php';
        break;
    case 'PUT':
        require_once 'futarokbackend/putfutarok.php';
        break;
    default: break;
}
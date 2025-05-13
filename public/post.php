<?php
use function Raymondoor\function\return_header;
require_once(__DIR__.'/../vendor/autoload.php');
session_start();
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    return_header('', true);
    exit;
};
if(isset($_GET['p'])){
    $handler = basename($_GET['p']);
    $file = POST_DIR.DIRECTORY_SEPARATOR.$handler.'.php';

    if(file_exists($file)){
        require_once $file;
    }else{
        http_response_code(404);
        exit('Handler not found');
    }
}else{
    http_response_code(400); // Bad Request
    exit('Missing handler');
}
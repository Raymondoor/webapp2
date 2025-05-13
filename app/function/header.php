<?php namespace Raymondoor\function;

function return_header($uri, $fullrefresh = false){
    if($fullrefresh){
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
        header("Pragma: no-cache"); // HTTP 1.0
        header("Expires: 0"); // Proxies
    }
    header("Location: ".HOME_URL.$uri);
    exit;
}
function indexIs(string $index){
    global $INDEX;
    $is = $INDEX === $index ? true : false;
    return $is;
}
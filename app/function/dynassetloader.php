<?php namespace Raymondoor\function;

function loadAsset(string $type, bool $priority = true){
    //for php files, it will only include if the file exists, but for css and js files, it will echo the according html tags regardlessly, and return;
    global $INDEX;
    $name = basename($INDEX);
    if($type == 'style'){
        if($priority){
            if(file_exists(ROOT_DIR.'/public/asset/style/lib/'.$name.'.php')){
                include_once(ROOT_DIR.'/public/asset/style/lib/'.$name.'.php');
                return;
            }else{
                return;
            }
        }elseif(!$priority){
            echo '<link rel="stylesheet" href="'.STYLE_URL.'/lib/'.$name.'.css" />';
            if(file_exists(ROOT_DIR.'/public/asset/style/lib/'.$name.'.css')){
                return;
            }else{
                return;
            }
        }
    }elseif($type == 'script'){
        if($priority){
            if(file_exists(ROOT_DIR.'/public/asset/script/lib/'.$name.'.php')){
                include_once(ROOT_DIR.'/public/asset/script/lib/'.$name.'.php');
                return;
            }else{
                return;
            }
        }elseif(!$priority){
            echo '<script src="'.SCRIPT_URL.'/lib/'.$name.'.js"></script>';
            if(file_exists(ROOT_DIR.'/public/asset/script/lib/'.$name.'.js')){
                return;
            }else{
                return;
            }
        }
    }else{
        return;
    }
}
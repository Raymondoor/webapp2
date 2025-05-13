<?php header('Content-Type: text/html; charset=utf-8');
use function Raymondoor\function\loadAsset;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=isset($TITLE)?$TITLE:'Raymondoor App'?></title>
    <link rel="icon" href="<?=IMAGE_URL?>/brand/tram.jpg" type="image/jpg" />
    <link rel="stylesheet" href="<?=STYLE_URL?>/pure-min.css" />
    <?=loadAsset('style', false)?>
    <?php include_once(ROOT_DIR.'/public/asset/style/general.php');?>
</head>

<?php require_once(__DIR__.'/../vendor/autoload.php'); // Copy the file and paste it where it belongs. change autoload path accordingly.
// Functions and loaded data here.

$TITLE = 'My Website';
$INDEX = 'home';

include_once(VIEW_DIR.'/html-head.php');
include_once(VIEW_DIR.'/html-header.php');
?>
<main>
    <p>Current URL: <?=CURRENT_URL?></p>
    <h1>Welcome!</h1>
    <img src="<?=IMAGE_URL?>/main/tram.jpg" class="pure-img">
</main>
<?php
include_once(VIEW_DIR.'/html-footer.php');
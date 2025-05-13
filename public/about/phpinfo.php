<?php require_once(__DIR__.'/../../vendor/autoload.php'); // Copy the file and paste it where it belongs. change autoload path accordingly.
// Functions and loaded data here.

$TITLE = 'About';
$INDEX = 's';

include_once(VIEW_DIR.'/html-head.php');
include_once(VIEW_DIR.'/html-header.php');
?>
<main>
    <p>Current URL: <?=CURRENT_URL?></p>
    <h1>phpinfo</h1>
    <?php
    ob_start();
    phpinfo();
    $phpinfo = ob_get_clean();
    echo $phpinfo;?>
</main>
<?php
include_once(VIEW_DIR.'/html-footer.php');
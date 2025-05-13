<?php require_once(__DIR__.'/../../vendor/autoload.php'); // Copy the file and paste it where it belongs. change autoload path accordingly.
// Functions and loaded data here.

$TITLE = 'About';
$INDEX = 'about';

include_once(VIEW_DIR.'/html-head.php');
include_once(VIEW_DIR.'/html-header.php');
?>
<main>
    <p>Current URL: <?=CURRENT_URL?></p>
    <h1>About This App</h1>
    <a href="./phpinfo.php">phpinfo</a>
</main>
<?php
include_once(VIEW_DIR.'/html-footer.php');
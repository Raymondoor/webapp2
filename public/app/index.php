<?php require_once(__DIR__.'/../../vendor/autoload.php');

$TITLE = 'App';
$INDEX = 'app';

include_once(VIEW_DIR.'/html-head.php');
include_once(VIEW_DIR.'/html-header.php');
?>
<main>
    <p>
        There is an "app/" directory in root as well, but /.htaccess will route to "public/app", which is here.
        So there is no worry for naming your directory/paths for URLs.
    </p>
    <p><?=CURRENT_URL?></p>
</main>
<?php
include_once(VIEW_DIR.'/html-footer.php');
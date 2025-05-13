<?php

use Raymondoor\Model\Example;

 require_once(__DIR__.'/../../vendor/autoload.php');

$TITLE = 'Example';
$INDEX = 'example';

include_once(VIEW_DIR.'/html-head.php');
include_once(VIEW_DIR.'/html-header.php');
?>
<main>
    <p>Current URL: <?=CURRENT_URL?></p>
    <h1>Some Examples</h1>
    <div id="description">
        <p>This is an example page to show some features of this app.</p>
        <p>Navigate to "public/example/index.php" and you will find an example of how a view file will look like.</p>
        <p>Navigate to "public/post.php" then "app/post/example.php" and you will find how posts are handled. The entry point is a single file in the public, making it more secure.</p>
        <p>Navigate to "app/model/Example.php" to find how data is fetched or transfered with the database.</p>
    </div>
    <div id="commands">
        <button id="makeButton">Make example table</button>
        <button id="seedButton">Populate example table</button>
        <button id="dropButton">Drop example table</button>
    </div>
    <hr>
    <div id="demodisp">
    <pre>
var_dump(Example::all());
<?php var_dump(Example::all())?>
</pre>
    </div>
</main>
<?php
include_once(VIEW_DIR.'/html-footer.php');

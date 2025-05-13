<?php
use function Raymondoor\function\indexIs;
?>
<header>
     <nav>
        <ul>
            <li><a href="<?=HOME_URL?>/" class="<?=indexIs('home')?'isActive':''?>">HOME</a></li>
            <li><a href="<?=HOME_URL?>/example/" class="<?=indexIs('example')?'isActive':''?>">EXAMPLE</a></li>
            <li><a href="<?=HOME_URL?>/about/" class="<?=indexIs('about')?'isActive':''?>">ABOUT</a></li>
        </ul>
     </nav>
</header>
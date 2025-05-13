<?php namespace Raymondoor\Config;
// Main (Local Path)
define('ROOT_DIR', realpath(__DIR__.'/../../')); // '/'
define('APP_DIR', ROOT_DIR.DIRECTORY_SEPARATOR.'app'); // '/app'
define('CONFIG_DIR', APP_DIR.DIRECTORY_SEPARATOR.'config'); // '/app/config'
define('DATA_DIR', APP_DIR.DIRECTORY_SEPARATOR.'data'); // '/app/data'
define('VIEW_DIR', APP_DIR.DIRECTORY_SEPARATOR.'view'); // '/app/data'
define('POST_DIR', APP_DIR.DIRECTORY_SEPARATOR.'post'); // '/app/post'

// Database

// URL
const HOME_PATH = '/webapp2'; // Leave blank if host is the root point. Add '/' in head if is not. e.g. '/myapp' This will map https://domain.com/myapp as home path.
define('HOME_URL', (isset($_SERVER['HTTPS'])?'https://':'http://').$_SERVER['SERVER_NAME'].HOME_PATH);
define('CURRENT_URL', (isset($_SERVER['HTTPS'])?'https://':'http://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
define('ASSET_URL',HOME_URL.'/asset');
define('IMAGE_URL',ASSET_URL.'/image');
define('STYLE_URL',ASSET_URL.'/style');
define('SCRIPT_URL',ASSET_URL.'/script');

//example
define('POST_URL',HOME_URL.'/post.php?p=');
define('ADMIN_URL', HOME_URL.'/admin');
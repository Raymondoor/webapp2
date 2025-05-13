## Initial Setup
Enable Override in httpd.conf.

set app/config/env.php files
## Quick Start
After your initial setup is complete, all you need to do is copy the whole project to where your html is served, usually in "/usr/local/apache2/htdocs" or "/var/www/html".

Routes will be the directories, as how apache normally behaves.

If you want to call methods from URIs, you can make your own class or function for that, and update the composer.json file accordingly.

To start making your own views, just copy the index.php file inside "app/view/.template/", make a new directory, and paste it there.


<?php

if (getenv("C9_PROJECT")) {
    define('DB_HOST', '173.230.141.29');
} else {
    define('DB_HOST', 'localhost');
}

define('DB_USER', 'jcole');
define('DB_PASS', 'ok7gkRkKGLpF');
define('DB_NAME', 'jcole_ifiwentto');

define('IDEAS_TBL', 'post_ideas');

$MYSQLI_LINK = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
mysqli_select_db($MYSQLI_LINK, DB_NAME);
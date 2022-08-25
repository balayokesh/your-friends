<?php

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'yourfriends');

define('DB_SERVER', 'sql213.epizy.com');
define('DB_USERNAME', 'epiz_32456546');
define('DB_PASSWORD', '7SgIPOCh4n');
define('DB_DATABASE', 'epiz_32456546_yourfriends');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


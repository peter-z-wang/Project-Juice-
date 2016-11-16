<?php

DEFINE('DB_USER', 'projectjuice');
DEFINE('DB_PASS', 'juice');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'project_juice');

$dbc =  @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>

<?php

$dbname = getenv('OPENSHIFT_MYSQL_DB_NAME');
$dbuser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbpass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbhost = getenv('OPENSHIFT_MYSQL_DB_HOST');

$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to the database host!");
mysqli_select_db($connect, $dbname) or die("Could not select the database!");

?>

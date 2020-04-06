<?php

$dbname = 'OPENSHIFT_MYSQL_DB_NAME';
$dbuser = 'OPENSHIFT_MYSQL_DB_USERNAME';
$dbpass = 'OPENSHIFT_MYSQL_DB_PASSWORD';
$dbhost = 'OPENSHIFT_MYSQL_DB_HOST';

$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to the database host!");
mysql_select_db($dbname) or die("Could not select the database!");

?>

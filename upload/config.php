<?php
$dbhost	= 'localhost';
$dbusn	= 'root';
$dbpass	= '';
$dbname	= 'tutorial';
$dbconn	= mysql_connect($dbhost,$dbusn,$dbpass);
$dbopen	= mysql_select_db($dbname,$dbconn);
?>
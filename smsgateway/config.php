<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "gammu";

$koneksi=mysqli_connect($host,$user,$pass,$db) or die (mysql_error());
//mysql_select_db($db) or die (mysql_error());
?>
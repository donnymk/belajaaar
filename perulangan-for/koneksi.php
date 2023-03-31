<?php
        $host="localhost";  
        $user="root"; 
        $db="diklat_teknis"; 
        //$host="mysql10.000webhost.com";  
        //$user="a6554746_root"; 
        //$db="a6554746_sewagd"; 
		$pass="";
        mysql_connect($host,$user,$pass) or die ("Server MySQL error");
        mysql_select_db($db) or die("Database error"); 
?>
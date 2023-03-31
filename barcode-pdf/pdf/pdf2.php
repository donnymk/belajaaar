<?php
mysql_connect("localhost","root","12345");
mysql_select_db("pdf");

$sql=mysql_query("select * from ktp where id='2'");
$data=mysql_fetch_array($sql);

$nama="$data[nama]";
$gambar=$data['foto'];

echo"<font face='free 3 of 9 Extended' size=20>*".$data['nama']."*</font>";
?>
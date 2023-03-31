<?php
include ('koneksi.php');
$query="select year(now()) as tahun";
$tahun=mysql_query($query);
if($row=mysql_fetch_object($tahun)){
	$thn = $row -> tahun;
}
for($date=1945;$date<=$thn;$date++){
    echo($date);
?>
<br/>
<?php
}
?>
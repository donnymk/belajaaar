<?php
//include ('../inc/config.php');
mysql_connect("localhost", "root", "root");
/* pilih databasenya */
mysql_select_db("belajarphp");

$query = "SELECT * from event ";
//echo $query;
$result = mysql_query($query) or die(mysql_error());
$arr = array();
while ($row = mysql_fetch_assoc($result)) {

    $temp = array("eventID" => $row["eventID"],
     "judul" => $row["judul"],
      "tanggal" => $row["tanggal"], 
  "jam" => $row["jam"], 
  "lokasi" => $row["lokasi"]);

    array_push($arr, $temp);
}

$data = json_encode($arr);
echo "{\"list_event\":" . $data . "}";
?>
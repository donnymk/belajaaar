<?php
include ('config.php');

$query = "SELECT * from event ";
//echo $query;
$result = mysqli_query($con, $query) or die(mysqli_error());
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {

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
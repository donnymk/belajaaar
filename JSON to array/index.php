<?php

$json = file_get_contents("indonesia.json");
$array = json_decode($json, true);
echo $json;
?>
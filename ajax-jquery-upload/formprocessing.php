<?php
$folderfoto	= 'foto/';

$id = $_POST['id'];
$username = $_POST['username'];
$profileImg = $_FILES['profileImg']['name'];
$displayImg = $_FILES['displayImg']['name'];

move_uploaded_file($_FILES['profileImg']['tmp_name'], $folderfoto.$profileImg);
?>
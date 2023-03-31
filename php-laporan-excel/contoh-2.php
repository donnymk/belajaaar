<?php
require_once "Excel.class.php";

#koneksi ke mysql
$mysqli = new mysqli("localhost","root","","diklat_teknis");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') ');
}
#akhir koneksi

#ambil data
$query = "SELECT * FROM peserta";
$sql = $mysqli->query($query);
$arrmhs = array();
while ($row = $sql->fetch_assoc()) {
	array_push($arrmhs, $row);
}
#akhir data

$excel = new Excel();
#Send Header
$excel->setHeader('contoh-2.xls');
$excel->BOF();

#header tabel
$excel->writeLabel(0, 0, "NAMA");
$excel->writeLabel(0, 1, "NIP");
$excel->writeLabel(0, 2, "LAHIR");
$excel->writeLabel(0, 3, "TGL LAHIR");
$excel->writeLabel(0, 4, "PANGKAT");
$excel->writeLabel(0, 5, "JABATAN");
$excel->writeLabel(0, 6, "ALAMAT");
$excel->writeLabel(0, 7, "STTPP");

#isi data
$i = 1;
foreach ($arrmhs as $baris) {
	$j = 0;
	foreach ($baris as $value) {
		$excel->writeLabel($i, $j, $value);
		$j++;
	}
	$i++;
}

$excel->EOF();

exit();
?>

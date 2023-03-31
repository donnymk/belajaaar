<?php
$con = mysqli_connect("localhost","root","l117k117","barcodepdf");
//mysql_select_db("barcodepdf");

$sql=mysqli_query($con, "select * from ktp where id='1'");
$data=mysqli_fetch_array($sql);

$nama=$data['nama'];
$gambar=$data['foto'];

define('FPDF_FONTPATH', 'fpdf/font/');
require('code39.php');

$tgl = date('D,d-F-Y');

$pdf = new PDF_Code39();

$pdf->Open();
$pdf->addPage('L');

$pdf->setFont('Arial','',20);

$pdf->Image('foto/' . $gambar,10,10,80);

$pdf->Code39(100, 30, $nama);

//$pdf->Code39(100, 30, 'Test');

$pdf->Output();

?>
<?php
require_once 'PHPWord.php';// memasukan library PHPWord

// membuat koneksi database
$mysqli = new mysqli('localhost', 'root', '', 'db_coba');
if ($mysqli->connect_errno) { // JIKA KONEKSI BERMASALAH
    die('kesalahan saat membuat koneksi ke database. <br>' . $mysqli->error);
}

// mengambil data siswa dengan perintah SELECT
$sql = "SELECT *FROM siswa WHERE nama='Agus'";
$query = $mysqli->query($sql);
if (!$query) { // JIKA PERINTAH SALAH
    die('Perintah salah. <br>' . $mysqli->error);
}
$data = $query->fetch_assoc(); // menngambil data
$query->close(); // membersihkan memori
$mysqli->close();

$PHPWord = new PHPWord(); // membuat objek PHPWord
$template = $PHPWord->loadTemplate('Template.docx'); // membuka template
// proses meletakan data dari database ke file template
foreach($data as $nama_kolom => $value){
    $template->setValue($nama_kolom, $value);
}

// menyimpan hasil
$file_hasil ="data-siswa.docx";
$template->save($file_hasil);

header('location: ' . $file_hasil);// download file
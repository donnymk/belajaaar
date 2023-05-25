<?php
$koneksi = mysqli_connect("127.0.0.1","root","","bpsdmdjateng_daftar");

// fungsi-fungsi untuk menampung variabel input dan melakukan sanitasi inputan
$string__ = mysqli_real_escape_string($koneksi, $_POST['input1']);

$string_ = filter_input(INPUT_POST, "input1", FILTER_SANITIZE_STRING);
$string = htmlspecialchars($string_);
	
echo 'Output fungsi mysqli_real_escape_string: '.$string__.'<br>';
echo 'Output layer pertama fungsi filter_input: '.$string_.'<br>';
echo 'Output layer kedua fungsi htmlspecialchars: '.$string;
?>
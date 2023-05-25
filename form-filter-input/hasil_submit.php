<?php
$koneksi = mysqli_connect("127.0.0.1","root","","bpsdmdjateng_daftar");

// fungsi-fungsi untuk menampung variabel input dan melakukan sanitasi inputan
$string1 = filter_input(INPUT_POST, "input1", FILTER_SANITIZE_STRING);
$string2 = htmlspecialchars($string1);

$string3 = mysqli_real_escape_string($koneksi, $_POST['input1']);
$string4 = mysqli_real_escape_string($koneksi, $string1);;


echo 'Output fungsi filter_input: '.$string1.'<br>';
echo 'Output fungsi filter_input + htmlspecialchars: '.$string2.'<br><br>';

echo 'Output fungsi mysqli_real_escape_string: '.$string3.'<br>';
echo 'Output fungsi filter_input + mysqli_real_escape_string: '.$string4.'<br>';
?>
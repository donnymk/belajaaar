<?php
include "excel_reader2.php";
$username = "root";
$password = "";
$database = "kacibang";

$konek=mysqli_connect("localhost", $username, $password,$database);
//mysql_select_db($database);

// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);
// default nilai
$sukses = 0;
$gagal = 0;

for ($i=2; $i<=$hasildata; $i++)
{
  $data1 = $data->val($i,2);
  $data2 = $data->val($i,3);
  $data3 = $data->val($i,4);
  $created_by = 'Admin';
  $date = date('Y-m-d H:i:s');
  $rand = rand();

$query = "INSERT INTO mesin  VALUES (null,'$data1','$data2','$rand', '$created_by', '$date')";
$hasil = mysqli_query($konek,$query);

if ($hasildata) $sukses++;
else $gagal++;

echo "<pre>";
print_r($query);
echo "</pre>";

}
echo "<b>import data selesai.</b> <br>";
echo "Data yang berhasil di import : " . $sukses .  "<br>";
echo "Data yang gagal diimport : ".$gagal .  "<br>";
echo "back <a href='import.php'>import</a>";
?>

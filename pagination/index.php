<html>
<head>
<title>Paging dengan PHP</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$batas = 3;
 
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
mysql_select_db('edi_ce');
/* Get total number of records */
$sql = "SELECT count(nama) FROM spk_blsm ";
$ambildata = mysql_query( $sql, $koneksi );
if(! $ambildata )
{
  die('Gagal Ambil Data: ' . mysql_error());
}
$row = mysql_fetch_array($ambildata, MYSQL_NUM );
$hitung = $row[0];
 
if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $batas * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $hitung - ($page * $batas);
 
$sql = "SELECT nama, pekerjaan, penghasilan ".
       "FROM spk_blsm ".
       "LIMIT $offset, $batas";
 
$ambildata = mysql_query( $sql, $koneksi );
if(! $ambildata )
{
  die('Gagal Ambil Data: ' . mysql_error());
}
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
    echo "NAMA KARYAWAN:{$row['nama']}  <br> ".
         "PEKERJAAN KARYAWAN : {$row['pekerjaan']} <br> ".
         "PENGHASILAN KARYAWAN : {$row['penghasilan']} <br> ".
         "--------------------------------<br>";
} 
 
if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"index.php?page=$last\">3 Data sebelumnya</a> |";
   echo "<a href=\"index.php?page=$page\">3 Data lagi</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"index.php?page=$page\">3 Data lagi</a>";
}
else if( $left_rec < $batas )
{
   $last = $page - 2;
   echo "<a href=\"index.php?page=$last\">3 Data sebelumnya</a>";
}
mysql_close($koneksi);
?>
</body>
</html>
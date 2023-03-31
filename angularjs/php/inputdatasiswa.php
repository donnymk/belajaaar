<?php
//create connection
$con=new mysqli('localhost','root','','test');

//check connection
if($con->connect_error){
    die('Connection failed: '.$con->connect_error);
}

$nosiswa=$_REQUEST['nosiswa'];
$nama=$_REQUEST['nama'];
$alamat=$_REQUEST['alamat'];
$thnmasuk=$_REQUEST['thnmasuk'];

//insert data siswa
$sql="insert into t_siswa (nosiswa,nama,alamat,thnmasuk) values ('".$nosiswa."','".$nama."','".$alamat."','".$thnmasuk."')";
$con->query($sql);

mysqli_close($con);
?>
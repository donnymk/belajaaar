<?php
//create connection
$con=new mysqli('localhost','root','','test');

//check connection
if($con->connect_error){
    die('Connection failed: '.$con->connect_error);
}

//delete data siswa
$sql="delete from t_siswa where siswaid=".$_REQUEST['siswaid'];
$con->query($sql);

mysqli_close($con);
?>
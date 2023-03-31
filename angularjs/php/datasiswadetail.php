<?php
//create connection
$con=new mysqli('localhost','root','','test');

//check connection
if($con->connect_error){
    die('Connection failed: '.$con->connect_error);
}

//ambil data siswa
$sql="select * from t_siswa where siswaid=".$_REQUEST["siswaid"];
$result=$con->query($sql);

if($result->num_rows>0){
    $datasiswaDetail=array();
    while($row=$result->fetch_assoc()){
        array_push($datasiswaDetail,array("siswaid"=>$row["siswaid"],"nosiswa"=>$row["nosiswa"],"nama"=>$row["nama"],"alamat"=>$row["alamat"],"thnmasuk"=>$row["thnmasuk"]));
    }
    echo json_encode($datasiswaDetail);
}
else{
    echo "0 results";
}

mysqli_close($con);
?>
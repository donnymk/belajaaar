<?php
//create connection
$con=new mysqli('localhost','root','','test');

//check connection
if($con->connect_error){
    die('Connection failed: '.$con->connect_error);
}

//ambil data siswa
$sql="select * from t_guru";
$result=$con->query($sql);

if($result->num_rows>0){
    $dataguru=array();
    while($row=$result->fetch_assoc()){
        array_push($dataguru,array("guruid"=>$row["guruid"],"noguru"=>$row["noguru"],"nama"=>$row["nama"],"alamat"=>$row["alamat"],"strata"=>$row["strata"]));
    }
    echo json_encode($dataguru);
}
else{
    echo "0 results";
}

mysqli_close($con);
?>
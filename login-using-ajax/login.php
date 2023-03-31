<?php
session_start();
//koneksi ke database
$conn = mysqli_connect('localhost','root','','admin');
if(isset($_POST['var_usn']) AND isset($_POST['var_pwd'])){
	$username = addslashes($_POST['var_usn']);
	$password = addslashes($_POST['var_pwd']);
	$check    = mysqli_query($conn,'select * from admin where Usn="'.$username.'" AND Pwd="'.$password.'" ');
	if(mysqli_num_rows($check)==0){
		echo 'Username atau Password Salah !';
	}
	else{
		$_SESSION['login']['usn'] = $username;
		$_SESSION['login']['pwd'] = $password;
		echo 'ok';
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Captcha</title>
</head>

<?php session_start(); ?>

<?php
if (isset($_POST['cek'])){ // JIKA SUBMIT CEK DIJALANKAN
    if($_SESSION['captcha']==$_POST['captcha']){ // JIKA CAPTCHA YG DITULIS SM DGN YG DITAMPILKAN MAKA
		echo "<script>alert('Berhasil! Kode CAPTCHA Valid!')</script>";
    }else{
		echo "<script>alert('Kode CAPTCHA Tidak Valid!')</script>";
    }
}
?>

<body>
<form method="post">
	Kode Captcha : <img src="captcha.php" /><br />
    <input type="text" name="captcha" maxlength="6" /><br />
    <input type="submit" name="cek" value="CEK"/>
</form>
</body>
</html>
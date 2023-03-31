<?php include "sesi.php"; ?>
<html>
<body>
<?php

// Menampilkan informasi yang disimpan pada Session
echo "Warna baju saya " . $_SESSION["warna"] . ".<br>";
echo "Hewan peliharaan saya " . $_SESSION["hewan"] . ".";
?>
</body>
</html>
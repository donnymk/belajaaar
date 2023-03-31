<?php
$str = "prothelon";
echo $str."<br><hr>";
echo "md5<br>".md5($str)."<br>".md5($str)."<br><br>";
echo "sha1<br>".sha1($str)."<br>".sha1($str)."<br><br>";
echo "md5+sha1<br>".sha1(md5($str))."<br>".sha1(md5($str))."<br><br>";

$str1 = 'Pa$$w0rdAdmin';
echo $str1."<br><hr>";
echo "sha1<br>".sha1($str1)."<br>".sha1($str1);


?>
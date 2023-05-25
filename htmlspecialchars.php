<?php
$string1 = '<div style="position: absolute; top: 0; bottom: 0; left: 0; background-color: black; font-size: 100px; color: red; text-align: center;">System Security is Low</div>';

$string2 = "<script>for(var i=0; i < Infinity; i++){ alert('THIS WEBSITE HAS BEEN SCRIPTING!!!')}</script>";

//echo $string2;
echo htmlspecialchars($string2);
?>
<?php

//An example piece of text that
//contains (invisible) newline characters.
$text = "Hello
    
this is a test  
";

//Before
echo nl2br($text);

//Replace the newline and carriage return characters
//using str_replace.
$text = str_replace(array("\n", "\r"), '', $text);

//After
echo nl2br($text);
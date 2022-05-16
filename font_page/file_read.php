<?php

$file  = fopen('font_page/readme.txt', 'r') or die("Unable to open file!");

$txt = "John Doe\n";
fwrite($file, $txt);
$txt = "Jane Doe\n";
$write = fwrite($file, $txt);
echo $write;
fclose($file);

?>
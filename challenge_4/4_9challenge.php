<?php

$fp = fopen('jikosyokai.txt', 'r');
$file_txt = fgets($fp);
fclose($fp);

echo $file_txt;
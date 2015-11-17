<?php

var_dump($_FILES) . "<br>";
$file_name = 'upload.txt';
move_uploaded_file($_FILES['userfile']['tmp_name'], $file_name);
echo $file_txt = nl2br(file_get_contents($file_name));
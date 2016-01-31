<?php

$name = $_POST['txtName'];
$seibetsu = $_POST['rdoSample'];
$syumi = nl2br($_POST['mulText']);

echo '名前：' . $name . "<br>";
echo '性別：' . $seibetsu . "<br>";
echo '趣味：' . "<br>" . $syumi;

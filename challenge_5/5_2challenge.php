<?php

$name = $_POST['txtName'];
$seibetsu = $_POST['rdoSample'];
$syumi = nl2br($_POST['mulText']);

echo '���O�F' . $name . "<br>";
echo '���ʁF' . $seibetsu . "<br>";
echo '��F' . "<br>" . $syumi;

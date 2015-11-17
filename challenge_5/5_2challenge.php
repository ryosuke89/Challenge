<?php

echo $name = '名前：' . $_POST['txtName'] . "<br>";
echo $seibetsu = '性別：' . $_POST['rdoSample'] . "<br>";
echo $syumi = nl2br('趣味：' . "<br>" . $_POST['mulText']);
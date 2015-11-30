<?php

require "dbaccessUtil.php";

$sql_d = "delete from user_t where userID=1";
$query_d = $pdo_object->prepare($sql_d);
$query_d -> execute();

echo 'íœ‚µ‚Ü‚µ‚½B';
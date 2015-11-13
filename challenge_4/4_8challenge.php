<?php

$fp = fopen('jikosyokai.txt', 'w');
fwrite($fp, '私の名前は加藤良介です。趣味はバドミントンです。');
fclose($fp);
<?php

//‡@
$syubetsu = $_GET['syubetsu'];
if ($syubetsu == 1) {echo 'G‰İ';
} elseif ($syubetsu == 2) {echo '¶‘NH•i';
} elseif ($syubetsu == 3) {echo '‚»‚Ì‘¼';
};

echo "<br>";

//‡A
$sougaku = $_GET['sougaku'];
$kosuu = $_GET['kosuu'];

//‘Šz
echo $sougaku ."<br>";

//1ŒÂ“–‚½‚è‚Ì’l’i
echo $sougaku / $kosuu ."<br>";

//‡B
if ($sougaku >= 3000 ) {
echo $sougaku * 0.04;
} elseif ($sougaku >= 5000 ) {
echo $sougaku * 0.05;
}
<?php

//①
$syubetsu = $_GET['syubetsu'];
if ($syubetsu == 1) {echo '商品種別：雑貨<br>';
} elseif ($syubetsu == 2) {echo '商品種別：生鮮食品<br>';
} elseif ($syubetsu == 3) {echo '商品種別：その他<br>';
}

//②
$sougaku = $_GET['sougaku'];
$kosuu = $_GET['kosuu'];

//総額
echo '総額：' . $sougaku . '円<br>';

//1個当たりの値段
echo '1個当たりの値段：' . $sougaku / $kosuu . '円<br>';

//③
if ($sougaku >= 3000 && $sougaku < 5000) {
echo 'ポイント：' . $sougaku * 0.04;
} elseif ($sougaku >= 5000 ) {
echo 'ポイント：' . $sougaku * 0.05;
}

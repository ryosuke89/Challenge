<?php

//�@
$syubetsu = $_GET['syubetsu'];
if ($syubetsu == 1) {echo '���i��ʁF�G��<br>';
} elseif ($syubetsu == 2) {echo '���i��ʁF���N�H�i<br>';
} elseif ($syubetsu == 3) {echo '���i��ʁF���̑�<br>';
}

//�A
$sougaku = $_GET['sougaku'];
$kosuu = $_GET['kosuu'];

//���z
echo '���z�F' . $sougaku . '�~<br>';

//1������̒l�i
echo '1������̒l�i�F' . $sougaku / $kosuu . '�~<br>';

//�B
if ($sougaku >= 3000 && $sougaku < 5000) {
echo '�|�C���g�F' . $sougaku * 0.04;
} elseif ($sougaku >= 5000 ) {
echo '�|�C���g�F' . $sougaku * 0.05;
}

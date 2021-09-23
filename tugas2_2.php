<?php

$beli = 50000;
$jual = 80000;
// mencari keuntungan dalam (%)
// rumus persentase untung adalah untung dibagi harga beli x 100%
$untung = $jual - $beli;
$persenUntung = $untung / $beli * 100;

echo "Jual = $jual <br />";
echo "Beli = $beli <br />";
echo "Keuntungan = $untung <br />";
echo "Jawaban : $persenUntung%";
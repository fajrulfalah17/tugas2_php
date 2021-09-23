<?php

// jika waktu 36jam = 12 pekerja
// maka jika 24 pekerja = ??
// 12 * 2 = 24 pekerja
// maka waktu 36 jam / 2
$waktu = 36;
$pekerja_1 = 12;
$pekerja_2 = 2 * $pekerja_1;
// mencari x fungsi perbandingan terbalik
$x = $waktu / 2;

echo "$waktu Hari = $pekerja_1 pekerja <br />";
echo "X hari = $pekerja_2 Pekerja <br />";
echo "X = $x Jam <br />";
echo "Jawaban : $x Jam";
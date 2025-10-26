<?php
/*
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari $a + $b: $hasilTambah <br>";
echo "Hasil dari $a - $b: $hasilKurang <br>";
echo "Hasil dari $a x $b: $hasilKali <br>";
echo "Hasil dari $a / $b: $hasilBagi <br>";
echo "Sisa bagi dari $a dan $b: $sisaBagi <br>";
echo "Hasil dari $a pangkat $b: $pangkat <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;


echo "Apakah $a == $b ? " . ($hasilSama ? "true" : "false") . "<br>";
echo "Apakah $a != $b ? " . ($hasilTidakSama ? "true" : "false") . "<br>";
echo "Apakah $a < $b ? " . ($hasilLebihKecil ? "true" : "false") . "<br>";
echo "Apakah $a > $b ? " . ($hasilLebihBesar ? "true" : "false") . "<br>";
echo "Apakah $a <= $b ? " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
echo "Apakah $a >= $b ? " . ($hasilLebihBesarSama ? "true" : "false") . "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Apakah $a && $b ? " . ($hasilAnd ? "true" : "false") . "<br>";
echo "Apakah $a || $b ? " . ($hasilOr ? "true" : "false") . "<br>";
echo "Apakah !$a ? " . ($hasilNotA ? "true" : "false") . "<br>";
echo "Apakah !$b ? " . ($hasilNotB ? "true" : "false") . "<br>";
echo "<br>";

$a += $b;
echo "Hasil dari a += b : $a <br>";
$a -= $b;
echo "Hasil dari a -= b : $a <br>";
$a *= $b;
echo "Hasil dari a *= b : $a <br>";
$a /= $b;
echo "Hasil dari a /= b : $a <br>";
$a %= $b;
echo "Hasil dari a %= b : $a <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil Identik : $hasilIdentik <br>";
echo "Hasil Tidak Identik : $hasilTidakIdentik <br>";
echo "<br>";
*/

echo "--- Menjawab Soal Cerita ---<br>";
$kursiRestoran = 45;
$kursiDitempati = 28;
$kursiKosong = (($kursiRestoran - $kursiDitempati) / $kursiRestoran) * 100;

echo "Persentase Kursi yang masih kosong berjumlah : $kursiKosong%";
?>
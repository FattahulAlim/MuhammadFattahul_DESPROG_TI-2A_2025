<?php
/*$nilaiNumerik = 92;

if ($nilaiNumerik > 90 && $nilaiNumerik <= 100) {
    echo"Nilai huruf A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}
echo "<br>";
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";
echo "<br>";


$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=0; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah $totalSkor <br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {

        echo "Nilai: $nilai (Tidak lulus) <br>";
    }
        echo "Nilai: $nilai (lulus) <br>";
}
echo "<br>";
*/

 echo "--- Jawaban Soal langkah 21 --- <br>";

$skorSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$total = 0;
sort($skorSiswa);
for ($i=0; $i < count($skorSiswa) ; $i++) { 
  
    if ($i == 0 || $i == 1 || $i == count($skorSiswa) -1 || $i == count($skorSiswa) -2) {
        continue;
    }
    $total += $skorSiswa[$i];
}

$rerata = $total / (count($skorSiswa) -4);
echo "Rata rata nilai siswa adalah : $rerata <br>";
echo "<br>";

 echo "--- Jawaban Soal langkah 23 --- <br>";
$hargaAsli = 120000;
$diskon = $hargaAsli * 0.2;
$hargaDibayar = $hargaAsli - $diskon;
echo "Harga yang harus dibayar pelanggan itu ialah : Rp $hargaDibayar<br>";
echo "<br>";

 echo "--- Jawaban Soal langkah 25 --- <br>";
$skorDikumpulkan = [59,82,13,48,72];
$totalSkor = 0;

foreach ($skorDikumpulkan as $skor) {
    $totalSkor += $skor;
}
echo "Total Skor Pemain Adalah : $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . (($totalSkor > 500) ? "YA" : "TIDAK");


?>
<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa";
} else {
    echo "Anda belum dewasa";
}

echo "<br>";

$data = array(
    "nama" => "Jane",
    "usia" => 20
);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variable nama tidak ditemukan dalam array.";
}
?>

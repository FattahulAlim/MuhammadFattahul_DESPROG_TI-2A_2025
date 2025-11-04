<?php
$targerDirectory = "documents/";

if (!file_exists($targerDirectory)) {
    mkdir($targerDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);


    for ($i=0; $i < $totalFiles ; $i++) { 
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targerDirectory . $fileName;

        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }
    } 
} else {
        echo "Tidak ada file yang diunggah.";
}
?>
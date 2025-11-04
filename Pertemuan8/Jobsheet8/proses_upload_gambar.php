<?php
$targetDirectory = "images/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName);

        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
            echo "<img src='$targetFile' width='200' style='height:auto; border:1px solid #ccc; margin:5px;'><br>";

        } else {
            echo "Gagal mengunggah file $fileName. <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>

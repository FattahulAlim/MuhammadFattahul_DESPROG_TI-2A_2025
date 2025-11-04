<?php
if (isset($_FILES['files'])) {
    $total_files = count($_FILES['files']['name']);
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    $max_size = 2 * 1024 * 1024; 
    $upload_dir = "images/";

    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $errors[] = array();
    $output = "";

    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors = "<p style='color:red;'>$file_name tidak diizinkan (hanya JPG, JPEG, PNG, GIF).</p>";

        }

        
        if ($file_size > $max_size) {
           $errors = "<p style='color:red;'>$file_name terlalu besar (maksimal 2MB).</p>";

        }

       
        if (move_uploaded_file($file_tmp, $upload_dir . $file_name)) {
            $output .= "<p style='color:green;'>$file_name berhasil diunggah.</p>";
            $output .= "<img src='$upload_dir$file_name' width='150' style='margin:5px; border:1px solid #ccc;'><br>";
        } else {
            $output .= "<p style='color:red;'>Gagal mengunggah $file_name.</p>";
        }
    }

    echo $output;
}
?>

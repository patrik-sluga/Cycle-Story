<?php
$uploadDir = "uploads/";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    if ($file['error'] === UPLOAD_ERR_OK) {
        $filePath = $uploadDir . basename($file['name']);
        move_uploaded_file($file['tmp_name'], $filePath);
        echo "File uploaded successfully!";
    } else {
        echo "Upload error!";
    }
} else {
    echo "No file received!";
}
?>

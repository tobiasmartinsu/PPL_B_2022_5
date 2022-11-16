<?php
function upload()
{
    $namaFile = htmlspecialchars($_FILES['upload_file']['name']);
    $ukuranFile = $_FILES['upload_file']['size'];
    // $errorFileUpload = $_FILES['upload_files']['error'];
    $tmpName = $_FILES['upload_file']['tmp_name'];

    //cek jika ukurann terlalu besar
    if ($ukuranFile > 3000000) {
        echo "<script> alert('ukuran gambar terlalu besar');</script>";
    }

    //lolos pengecekan, gambar siap di upload
    move_uploaded_file($tmpName, 'datairs/' . $namaFile);

    return $namaFile;
}

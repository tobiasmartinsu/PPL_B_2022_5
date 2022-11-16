<?php
function foto(){
    $namaFile = htmlspecialchars($_FILES['foto']['name']);
    $ukuranFile = $_FILES['foto']['size'];
    // $errorFileUpload = $_FILES['fotos']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek jika ukurann terlalu besar
    // if ($ukuranFile > 3000000) {
    //     echo "<script> alert('ukuran gambar terlalu besar');</script>";
    // }

    //lolos pengecekan, gambar siap di upload
    move_uploaded_file($tmpName, 'data_foto_user/' . $namaFile);

    return $namaFile;
}

?>
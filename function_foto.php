<?php
function foto(){
    $namaFile = htmlspecialchars($_FILES['foto']['name']);
    $ukuranFile = $_FILES['foto']['size'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //Cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    //Generate nama file baru
    // $namaFileBaru = uniqid();
    // $namaFileBaru .= 


    move_uploaded_file($tmpName, 'data_foto_user/' . $namaFile);

    return $namaFile;
}

?>
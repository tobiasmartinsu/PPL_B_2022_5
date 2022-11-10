<?php
function upload()
{
    $namaFile = htmlspecialchars($_FILES['upload_file']['name']);
    $ukuranFile = $_FILES['upload_file']['size'];
    // $errorFileUpload = $_FILES['upload_files']['error'];
    $tmpName = $_FILES['upload_file']['tmp_name'];

    //mengecek apakah gambar sudah ada atau belum
    // if($errorFileUpload === 4){
    //   echo "<script> alert('pilih gambar terlebih dahulu');</script>";
    //   return false;
    // }

    // //mengecek file yang di upload pdf/jpg
    // $ekstensiGambarValid = ['pdf'];
    // $ekstensiGambar = explode('.', $namaFile);
    // $ekstensiGambar = strtolower(end($ekstensiGambar));

    // if(!in_array($ekstensiGambar,$ekstensiGambarValid));{
    //     echo "<script> alert('yang di upload bukan gambar');</script>";
    //     return false;
    // }

    //cek jika ukurann terlalu besar
    if ($ukuranFile > 3000000) {
        echo "<script> alert('ukuran gambar terlalu besar');</script>";
    }

    //lolos pengecekan, gambar siap di upload
    move_uploaded_file($tmpName, 'datairs/' . $namaFile);

    return $namaFile;
}

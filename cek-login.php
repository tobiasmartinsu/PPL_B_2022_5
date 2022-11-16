<?php
// Memanggil koneksi ke db
include 'koneksi.php';

$nimnip = mysqli_escape_string($koneksi, $_POST['nimnip']);
$pass = md5($_POST['password']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

// Mengecek NIM/NIP terdaftar atau tidak

$cek_user = mysqli_query($koneksi, "SELECT * FROM tuser WHERE nimnip = '$nimnip' AND level = '$level'");
$user_valid = mysqli_fetch_array($cek_user);

// Jika NIM/NIP terdaftar

if ($user_valid) {
    // Jika NIP/NIP terdaftar cek password
    if ($password == $user_valid['password']) {

        //jika password sesuai, maka buat session
        session_start();
        $_SESSION['nimnip'] = $user_valid['nimnip'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];
        

        // Uji level user
        if ($level == "Admin") {
            echo "<script>window.location.href='index_admin.php';</script>";
            exit;
        } elseif ($level == 'Mahasiswa') {
            echo "<script>window.location.href='index_mahasiswa.php';</script>";
        }

        elseif($level == 'Departemen'){
            echo "<script>window.location.href='index_departemen.php';</script>";
        }
        elseif($level == 'Dosen'){
            echo "<script>window.location.href='index_dosen.php';</script>";
        }

    }else {
        echo "<script>alert('Maaf Login Gagal, Password Anda Tidak Sesuai!'); document.location = 'login.php'</script>";
    }
    

} else {
    echo "<script>alert('Maaf Login Gagal, Username Anda Tidak Terdaftar!'); document.location = 'login.php'</script>";
}

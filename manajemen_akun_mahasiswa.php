<?php
session_start();
require_once('koneksi.php');
#validasi nama lengkap
if (isset($_POST['submit'])) {
    $nama_lengkap = test_input($_POST['nama_lengkap']);
    if ($nama_lengkap == "") {
        $error_nama_lengkap = "Nama lengkap harus diisi";
    }

    $nim = test_input($_POST['nim']);
    if ($nim == "") {
        $error_nim = "NIM harus diisi";
    }

    $angkatan = test_input($_POST['angkatan']);
    if ($angkatan == "") {
        $error_angkatan = "Angkatan harus diisi";
    }

    $status = $_POST['status'];
    if (empty($_POST['status'])) {
        $error_status = "Status tidak boleh kosong";
    }

    $query = "INSERT INTO tuser (nimnip, nama_lengkap, password, level) VALUES ('" . $nim . "','" . $nama_lengkap . "' ,'" . hash('md5', '123') . "', 'Mahasiswa')";
    $result = $koneksi->query($query);
    $user_id = $koneksi->insert_id;

    $query = "INSERT INTO data_mahasiswa (nim, nama, angkatan, status, user_id) VALUES ('" . $nim . "','" . $nama_lengkap . "','" . $angkatan . "','" . $status . "','" . $user_id . "')";
    $result = $koneksi->query($query);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LomSIAP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/lomsiap.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index_admin.php" class="logo d-flex align-items-center">
      <img src="assets/img/lomsiap.png" alt="">
      <span class="d-none d-lg-block">LomSIAP</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->
</div><!-- End Logo -->



<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">


    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['nama_lengkap']?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="">
        <li class="dropdown-header">
          <h6><?= $_SESSION['nama_lengkap']?></h6>
          <span><?= $_SESSION['level']?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="profile_admin.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Log Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->
</header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="index_admin.php  ">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link  " href="manajemen_akun_mahasiswa.php">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Manajemen Akun Mahasiswa</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="data_mahasiswa.php">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Data Mahasiswa</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="data_mahasiswa_pkl.php">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Data Mahasiswa PKL</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="data_mahasiswa_skripsi.php">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Data Mahasiswa Skripsi</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">

        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Entry Mahasiswa</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="">
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control" id="inputNanme4">
                        <div id="error_nama_lengkap" style="color:red">
                            <?php
                            if (isset($error_nama_lengkap)) {
                                echo $error_nama_lengkap;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nim">
                    </div>
                    <div id="error_nim" style="color:red">
                        <?php
                        if (isset($error_nim)) {
                            echo $error_nim;
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="inputNanme4" name="angkatan">
                    </div>
                    <div id="error_angkatan" style="color:red">
                        <?php
                        if (isset($error_angkatan)) {
                            echo $error_angkatan;
                        }
                        ?>
                    </div>

                    <div class="col-12">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option selected="">-- Pilih Status --</option>
                            <option value="AKTIF">Aktif</option>
                            <option value="CUTI">Cuti</option>
                            <option value="MANGKIR">Mangkir</option>
                            <option value="DO">DO</option>
                            <option value="UNDUR DIRI">Undur Diri</option>
                            <option value="LULUS">Lulus</option>
                            <option value="MENINGGAL DUNIA">Meninggal Dunia</option>
                        </select>
                    </div>



                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Generate</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('footer.php') ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>
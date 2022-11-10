<?php
require_once('koneksi.php');
require_once('function_upload.php');

session_start();

$nim = $_SESSION['nimnip'];

if (isset($_GET['semester'])) {
    $semester = $_GET['semester'];
    $query = 'SELECT * FROM data_mahasiswa WHERE nim="' . $nim . '"';
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nama = $row['nama'];
            $status = $row['status'];
            $nim = $row['nim'];
            $angkatan = $row['angkatan'];
            $alamat = $row['alamat'];
            $phone = $row['phone'];
            $email = $row['email'];
        }
    }
}
?>

<?php

if (!isset($_POST['submit'])) {
    $query = "SELECT * FROM data_irs WHERE nim = '" . $nim . "' AND semester = '" . $semester . "'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $semester = $row['semester'];
            $sks_semester = $row['sks_semester'];
            $sks_kumulatif = $row['sks_kumulatif'];
            $upload_file = $row['upload_file'];
        }
    }
} else {
    $semester = $_POST['semester'];
    $sks_semester = $_POST['sks_semester'];
    $sks_kumulatif = $_POST['sks_kumulatif'];
    $upload_file = upload();

    $query = "UPDATE data_irs SET semester = '" . $semester . "', sks_semester = '" . $sks_semester . "', sks_kumulatif = '" . $sks_kumulatif . "', upload_file = '" . $upload_file . "' WHERE nim = '" . $nim . "' AND semester = '" . $semester .  "' ";
    $result = $koneksi->query($query);
    if (!$result) {
        die("Could not query the database: <br />" . $koneksi->error);
    } else {
        echo "<script>alert('Data berhasil diupdate!')</script>";
        header('Location: entryIRS.php');
    }
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

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/lomsiap.png" alt="">
                <span class="d-none d-lg-block">LomSIAP</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?= $nama ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?= $nama ?></h6>
                            <span>Mahasiswa</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
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
                <a class="nav-link collapsed" href="index_mahasiswa.php">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="EntryKHS.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Entry KHS</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link " href="EntryIRS.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Entry IRS</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="EntryPKL.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Entry PKL</span>
                </a>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="EntrySkripsi.php">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Entry Skirpsi</span>
                </a>
            </li><!-- End Tables Nav -->



            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">

        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="">

                <!-- Left side columns -->
                <div class="">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-12">
                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Edit IRS</h5>

                                        <div class="main-content card">
                                            <div class="card-header h3">Edit IRS</div>
                                            <div class="card-body">
                                                <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?nim=' . $nim; ?>">
                                                    <div class="form-group">
                                                        <label class="form-label" for="">Semester</label><br>
                                                        <input class="form-control" name="semester" value="<?php if (isset($semester)) {
                                                                                                                echo $semester;
                                                                                                            } ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="">SKS Semester</label><br>
                                                        <input class="form-control" name="sks_semester" value="<?php if (isset($sks_semester)) {
                                                                                                                    echo $sks_semester;
                                                                                                                } ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="">SKS Kumulatif</label><br>
                                                        <input class="form-control" name="sks_kumulatif" value="<?php if (isset($sks_kumulatif)) {
                                                                                                                    echo $sks_kumulatif;
                                                                                                                }  ?>">
                                                    </div>
                                                    </br>
                                                    <div class="form-group">
                                                        <label class="form-label" for="">Upload Scan KHS</label><br>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="file" id="upload_file" name="upload_file" value="<?php if (isset($upload_file)) {
                                                                                                                                                    echo $upload_file;
                                                                                                                                                }  ?>">
                                                        </div>
                                                    </div>
                                                    </br>
                                                    <button class="btn btn-primary" name="submit" type="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Recent Sales -->

                            <!-- Top Selling -->
                            </a>
                            <!-- End Top Selling -->

                            <!-- Top Selling -->

                            <div class="col-12" id="top-selling"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                </a>
                                <div class="card top-selling overflow-auto"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                                    </a>
                                    <div class="filter"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                        </a><a class="d-none icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                                    </div>



                                </div>
                            </div><!-- End Top Selling -->

                        </div>
                    </div><!-- End Left side columns -->








                </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            © Copyright <strong><span>LomSiap</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

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
</body>

</html>
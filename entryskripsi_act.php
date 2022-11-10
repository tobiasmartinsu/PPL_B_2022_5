<?php
require_once('koneksi.php');
require_once('function_upload.php');

session_start();
$nim = $_SESSION['nimnip'];




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
?>

<?php


if ($_POST) {
  $semester = $_POST['semester'];
  $status_skripsi = $_POST['status_skripsi'];
  $nilai_skripsi = $_POST['nilai_skripsi'];
  $lama_studi = $_POST['lama_studi'];
  $tanggal_sidang = $_POST['tanggal_sidang'];
  $upload_file = upload();

  $query = "INSERT INTO data_skripsi ( nim, semester, status_skripsi, nilai_skripsi, lama_studi, tanggal_sidang, upload_file) VALUES ('" . $nim . "', '" . $semester . "', '" . $status_skripsi . "', '" . $nilai_skripsi . "', '" . $lama_studi . "', '" . $tanggal_sidang . "', '" . $upload_file . "')";
  $result = $koneksi->query($query);
  if (!$result) {
    die("Could not query the database: <br />" . $koneksi->error);
  } else {
    // echo "<script>alert('Data berhasil diupdate!')</script>";
    echo '<script language="javascript">';
    echo 'alert("Data berhasil ditambahkan")';
    echo '</script>';
    header('Location: entryskripsi.php');
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
  <?php include('header.php'); ?>

  <!-- ======= Sidebar ======= -->
  <?php include('sidebar.php'); ?>  

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
                    <h5 class="card-title">Entry Skripsi</h5>

                    <div class="main-content card">
                      <div class="card-header h3">Entry Skripsi</div>
                      <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="form-label" for="">Semester</label><br>
                            <input class="form-control" name="semester">
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="">Status (LULUS/BELUM LULUS)</label><br>
                            <input class="form-control" name="status_skripsi">
                          </div>
                          <div class="form-group">
                            <label class="form-label" for="">Nilai</label><br>
                            <input class="form-control" name="nilai_skripsi">
                          </div>
                          </br>
                          <div class="form-group">
                            <label class="form-label" for="">Lama Studi (dalam semester)</label><br>
                            <input class="form-control" name="lama_studi">
                          </div>
                          </br>
                          <div class="form-group">
                            <label class="form-label" for="">Tanggal Sidang (dd/mm/yyyy)</label><br>
                            <input class="form-control" name="tanggal_sidang">
                          </div>
                          </br>
                          <div class="form-group">
                            <label class="form-label" for="">Upload Scan Skripsi</label><br>
                            <div class="col-sm-10">
                              <input class="form-control" type="file" id="upload_file" name="upload_file">
                            </div>
                          </div>
                          </br>
                          <button class="btn btn-primary" type="submit">Save</button>
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
  <?php include('footer.php'); ?>
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
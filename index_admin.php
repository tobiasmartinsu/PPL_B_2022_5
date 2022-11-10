<?php 
  require_once("BEindex_admin.php");
  require_once("koneksi.php");
  session_start();
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
  <link href="https://fonts.gstatic.com" rel="p reconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <?php include('header.php'); ?>

  <!-- ======= Sidebar ======= -->
  <?php include('sidebar.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Selamat Datang</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="">

        <!-- Left side columns -->
        <div class="">
          <div class="row">

            <!-- Profile card -->
            <div class="col-12">
              <div class="card info-card sales-card">



                <div class="card-body">
                  <h5 class="card-title"><?=$_SESSION['nama_lengkap']?></h5>

                  <div class="d-flex align-items-center">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                      <div class="ps-3">
                        <h4>Admin</h4>
                        <span class="text-success small pt-1 fw-bold">Aktif</span> <span class="text-muted small pt-2 ps-1">|| <?=$_SESSION['nimnip']?></span>

                      </div>
                    </a>
                  </div><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  </a>
                </div><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                </a>
              </div><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              </a>
            </div><!-- End Profiles Card --><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">



              <!-- Data Departemen -->
            </a>
            <div class="col-12" id="data-departemen"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              </a>
              <div class="card top-selling overflow-auto"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                </a>
                <div class="filter"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  </a><a class="d-none icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Data Departemen<span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>Mahasiswa</td>

                        <td class="fw-bold"><?php echo $rows; ?></td>

                      </tr>
                      <tr>

                        <td>Dosen</td>
                        <td class="fw-bold"><?php echo $rows1; ?></td>

                      </tr>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Data Departemen -->


            <!-- Data Mahasiswa -->
            
            <div class="col-12" id="top-selling"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              </a>
              <div class="card top-selling overflow-auto"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                </a>
                <div class="filter"><a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  </a><a class="d-none icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>

                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Data Mahasiswa<span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>Aktif</td>
                        <td class="fw-bold"><?php echo $rows2; ?></td>

                      </tr>
                      <tr>

                        <td>Cuti</td>
                        <td class="fw-bold"><?php echo $rows3; ?></td>

                      </tr>
                      <tr>

                        <td>Mangkir</td>
                        <td class="fw-bold"><?php echo $rows4; ?></td>

                      </tr>
                      <tr>

                        <td>DO</td>
                        <td class="fw-bold"><?php echo $rows5; ?></td>

                      </tr>
                      <tr>

                        <td>Undur Diri</td>
                        <td class="fw-bold"><?php echo $rows6; ?></td>

                      </tr>
                      <tr>

                        <td>Lulus</td>
                        <td class="fw-bold"><?php echo $rows7; ?></td>

                      </tr>
                      <tr>

                        <td>Meninggal Dunia</td>
                        <td class="fw-bold"><?php echo $rows8; ?></td>

                      </tr>

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Data Mahasiswa -->

          </div>
        </div><!-- End Left side columns -->








    </div></section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- include footer  -->
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



<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>

</html>

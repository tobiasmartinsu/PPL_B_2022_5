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

  <!-- include header.php -->
  <?php include('header.php'); ?>

  <?php include('sidebar.php'); ?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="col-12">
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Entry IRS</h5>
                  <a href="entryIRS_act.php">
                    <input type="button" class="btn btn-primary" value="Tambah Data" />
                  </a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Semester</th>
                        <th scope="col">SKS Semester</th>
                        <th scope="col">SKS Kumulatif</th>
                        <th scope="col">File</th>
                        <th scope="col">Aksi</th>
                      </tr>
                      <tr>
                        <!-- show data from koneksi  -->
                        <?php
                        $query = "SELECT * FROM data_irs WHERE nim = '" . $nim . "'";
                        $result = $koneksi->query($query);

                        if (!$result) {
                          die("Could not query the database: <br>" . $koneksi->error . "<br>Query: " . $query);
                        }

                        while ($row = $result->fetch_object()) {
                          echo '<tr>';
                          echo '<td>' . $row->semester . '</td>';
                          echo '<td>' . $row->sks_semester . '</td>';
                          echo '<td>' . $row->sks_kumulatif . '</td>';
                          echo '<td>' . $row->upload_file . '</td>';
                          echo '<td><a href="editIRS.php?semester=' . $row->semester . '">Edit</a> | <a class="btn btn-danger btn-sm" href="deleteIRS.php?id=' . $row->semester . '">Delete</a></td>';
                          echo '</tr>';
                        }
                        echo '</table>';
                        echo '<br />';
                        $result->free();
                        $koneksi->close();
                        ?>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

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



  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>
</body>

</html>
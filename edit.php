<?php
include_once("koneksi.php");
session_start();

if (isset($_POST['update'])) {

	$nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$verifikasi = mysqli_real_escape_string($koneksi, $_POST['verifikasi']);
	$status = mysqli_real_escape_string($koneksi, $_POST['status']);

	// checking empty fields
	if (empty($nama) || empty($verifikasi) || empty($status)) {

		if (empty($nama)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if (empty($verifikasi)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if (empty($status)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($koneksi, "UPDATE verifikasi SET nama='$nama',verifikasi='$verifikasi',status ='$status' WHERE nim=$nim");

		//redirectig to the display page. In our case, it is index.php
		header("Location: data_mahasiswa_dosen.php");
	}
}
?>
<?php

$nim = $_GET['nim'];

$result = mysqli_query($koneksi, "SELECT * FROM verifikasi WHERE nim=$nim");

while ($res = mysqli_fetch_array($result)) {
	$nama = $res['nama'];
	$verifikasi = $res['verifikasi'];
	$status = $res['status'];
}
?>
<html>

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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
		<span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['nama_lengkap'] ?></span>
	  </a><!-- End Profile Iamge Icon -->

	  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="">
		<li class="dropdown-header">
		  <h6><?= $_SESSION['nama_lengkap'] ?></h6>
		  <span><?= $_SESSION['level'] ?></span>
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


	<!-- End Sidebar-->
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<br><br>
			<!-- <div class="col-12"> -->
			<div class="card recent-sales overflow-auto">
				<div class="card-body">
					<h5 class="card-title">Aproval</h5>
					<table class="table table-borderless datatable">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
						</tr>
						<tr>
							<td>Verifikasi</td>
							<td><input type="text" name="verifikasi" value="<?php echo $verifikasi; ?>"></td>
						</tr>
						<tr>
							<td>Status</td>
							<td><input type="text" name="status" value="<?php echo $status; ?>"></td>
						</tr>
						<tr>
							<td><input type="hidden" name="nim" value=<?php echo $_GET['nim']; ?>></td>
							<td><input type="submit" name="update" value="Aprove"></td>
						</tr>
					</table>
	</form>
</body>

</html>
<?php
session_destroy();
unset($_SESSION['nimnip']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['level']);

header("Location: login.php");
?>

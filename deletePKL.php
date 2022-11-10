<?php

require_once('koneksi.php');
session_start();

$nim = $_SESSION['nimnip'];

if (isset($_GET['id'])) {
    $semester = $_GET['id'];
    $query = "DELETE FROM data_pkl WHERE semester = " . $semester . "";
    $result = $koneksi->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $koneksi->error . "<br>Query: " . $query);
    } else {
        $koneksi->close();
        header('Location: entryPKL.php');
    }
}

<?php

require_once('koneksi.php');

session_start();
$nim = $_SESSION['nimnip'];



if (isset($_GET['id'])) {
    $semester = $_GET['id'];
    $query = "DELETE FROM data_khs WHERE nim = '" . $nim . "'  AND semester = '" . $semester . "'";
    $result = $koneksi->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    } else {
        $koneksi->close();
        header('Location: entryKHS.php');
    }
}

<?php require_once("koneksi.php")?>

<?php
    $query = "SELECT COUNT(*) FROM data_mahasiswa";
    $result = $koneksi->query($query);

    while ($row = mysqli_fetch_array($result)) {
        $rows = $row['COUNT(*)'];
    }
?>

<?php
    $query1 = "SELECT COUNT(*) FROM data_dosen";
    $result1 = $koneksi->query($query1);

    while ($row1 = mysqli_fetch_array($result1)) {
        $rows1 = $row1['COUNT(*)'];
    }
?>

<?php
    $query2 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'AKTIF'";
    $result2 = $koneksi->query($query2);

    while ($row2 = mysqli_fetch_array($result2)) {
        $rows2 = $row2['COUNT(*)'];
    }
?>

<?php
    $query3 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'CUTI'";
    $result3 = $koneksi->query($query3);

    while ($row3 = mysqli_fetch_array($result3)) {
        $rows3 = $row3['COUNT(*)'];
    }
?>

<?php
    $query4 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'MANGKIR'";
    $result4 = $koneksi->query($query4);

    while ($row4 = mysqli_fetch_array($result4)) {
        $rows4 = $row4['COUNT(*)'];
    }
?>

<?php
    $query5 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'DO'";
    $result5 = $koneksi->query($query5);

    while ($row5 = mysqli_fetch_array($result5)) {
        $rows5 = $row5['COUNT(*)'];
    }
?>

<?php
    $query6 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'UNDUR DIRI'";
    $result6 = $koneksi->query($query6);

    while ($row6 = mysqli_fetch_array($result6)) {
        $rows6 = $row6['COUNT(*)'];
    }
?>

<?php
    $query7 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'LULUS'";
    $result7 = $koneksi->query($query7);

    while ($row7 = mysqli_fetch_array($result7)) {
        $rows7 = $row7['COUNT(*)'];
    }
?>

<?php
    $query8 = "SELECT COUNT(*) FROM data_mahasiswa WHERE status = 'MENINGGAL DUNIA'";
    $result8 = $koneksi->query($query8);

    while ($row8 = mysqli_fetch_array($result8)) {
        $rows8 = $row8['COUNT(*)'];
    }
?>
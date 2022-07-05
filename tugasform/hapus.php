<?php
require 'koneksi.php';
$nik = $_GET["id"];
$query_delete = "DELETE FROM datapelamar WHERE NIK=$nik";
$delete_data = mysqli_query($conn, $query_delete);

if (mysqli_affected_rows($conn) > 0) {
    echo "
    <script>
        alert('Data Berhasil di Hapus!');
        document.location.href = 'tampildata.php';
    </script>
    ";} else {
        echo "
    <script>
        alert('Data Gagal di Hapus!');
        document.location.href = 'tampildata.php';
    </script>
    ";}
    ?>
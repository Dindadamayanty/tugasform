<?php 
$servername ='localhost';
$username = 'root';
$password ='';
$databasename ='test';

$koneksi = mysqli_connect
($servername,$username,$password,$databasename);

// cara membuat terkoneksi atau tidak
if(!$koneksi){
    echo "koneksi gagal";
} else {
    // echo "berhasil terkoneksi";
}
?>
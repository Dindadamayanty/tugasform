<?php 
include("koneksi.php");

$ID = $_POST['NIK'];
$nama = $_POST['studentname'];
$address = $_POST['alamat'];
$gender = $_POST['JK'];
$phone = $_POST['nohp'];
$mail = $_POST['email'];
$birthlocation = $_POST['tempatlahir'];
$birthdate = $_POST['tanggallahir'];
$age = $_POST['usia'];
$education = $_POST['pendidikan'];
$univ = $_POST['universitas'];
$major = $_POST['jurusan'];
$score = $_POST['IPK'];
$company1 = $_POST['namaperusahaan1'];
$position1 = $_POST['jabatanterakhir1'];
$year1 = $_POST['tahunbekerja1'];
$company2 = $_POST['namaperusahaan2'];
$position2 = $_POST['jabatanterakhir2'];
$year2 = $_POST['tahunbekerja2'];
$jobposition = $_POST['posisi'];


if(isset($_POST['kirim'])){
    $sql= "insert into datapelamar values ('$ID','$nama','$address','$gender','$phone','$mail','$birthlocation','$birthdate','$age','$education','$univ','$major','$score','$company1','$position1','$year1','$company2','$position2','$year2','$jobposition')";
    
    $tambahdata = mysqli_query ($koneksi,$sql);
    if($tambahdata){
        echo "data berhasil di insert";
    } else {
        echo "data gagal di insert";
    }
}
?>
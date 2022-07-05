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


if(isset($_POST['update'])){
    $sql = "UPDATE datapelamar SET
            NIk='$ID', nama='$nama', alamat='$address', JK='$gender', nohp='$phone', email='$mail', tempatlahir='$birthlocation', tanggallahir='$birthdate', usia='$age', pendidikan='$education', universitas='$univ', jurusan='$major', IPK='$score', Namaperusahaan1='$company1', jabatanterakhir1='$position1', tahunbekerja1='$year1', Namaperusahaan2='$company2', jabatanterakhir2='$position2', tahunbekerja2='$year2', posisi='$jobposition'
            WHERE NIK = '$ID'";
    $updatedata = mysqli_query($koneksi,$sql);

    if ($updatedata) {
        // echo "data berhasil di update";
        header ("location:tampildata.php");
    } else {
        echo "data gagal di update";
    }

}
?>
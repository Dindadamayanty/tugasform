<?php
require "koneksi.php";

$query_select = "select * from datapelamar order by NIK";
$result = mysqli_query ($koneksi, $query_select);
// $row = mysqli_fetch_array($result);
// var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil data pelamar</title>
</head>
<body>
    <fieldset>
        <legend>Data Pelamar</legend>
        <a href="indexform.html">- Tambah data -</a>
        <table border="1" style ="border-collapse:collapse" cellpadding="3">
        <tr>
            <td rowspan="2">NO</td>
            <Td colspan="9">Biodata Diri</Td>
            <td colspan="4">Pendidikan</td>
            <td colspan="3">Pengalaman kerja I</td>
            <td colspan="3">Pengalaman kerja II</td>
            <td rowspan="2">Posisi yang di lamar</td>
            <td rowspan="2">aksi</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>jenis Kelamin</td>
            <td>NO Hp</td>
            <td>Email</td>
            <td>Tempat lahir</td>
            <td>Tanggal lahir</td>
            <td>Usia</td>
            <td>Jenjang Pendidikan</td>
            <td>Universitas</td>
            <td>Jurusan</td>
            <td>IPK</td>
            <td>Nama Perusahaan</td>
            <td>Jabatan Terakhir</td>
            <td>tahun bekerja</td>
            <td>Nama Perusahaan</td>
            <td>Jabatan Terakhir</td>
            <td>tahun bekerja</td>
            
        </tr>
        
        <?php $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            ?>
        
        
        <tr>
            <td><?=$i;?></td>
            <td><?=$row["NIK"];?></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["alamat"];?></td>
            <td><?=$row["JK"];?></td>
            <td><?=$row["nohp"];?></td>
            <td><?=$row["email"];?></td>
            <td><?=$row["tempatlahir"];?></td>
            <td><?=$row["tanggallahir"];?></td>
            <td><?=$row["usia"];?></td>
            <td><?=$row["pendidikan"];?></td>
            <td><?=$row["universitas"];?></td>
            <td><?=$row["jurusan"];?></td>
            <td><?=$row["IPK"];?></td>
            <td><?=$row["Namaperusahaan1"];?></td>
            <td><?=$row["jabatanterakhir1"];?></td>
            <td><?=$row["tahunbekerja1"];?></td>
            <td><?=$row["Namaperusahaan2"];?></td>
            <td><?=$row["jabatanterakhir2"];?></td>
            <td><?=$row["tahunbekerja2"];?></td>
            <td><?=$row["posisi"];?></td>
            <td>
                <a href="edit.php?id=<?=$row ["NIK"];?>">Edit</a> | 
                <a href = "hapus.php?id=<?=$row["NIK"];?>" onclick = "return confirm ('Yakin?');">Hapus</a></a>
            </td>
        </tr>
      <?php $i++;
      } ?>
        </table>    
    </fieldset>
</body>
</html>
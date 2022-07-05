<style type="text/css">
        body {
            font-family: 'Noto Sans' ;
            background-color: #DBDDDD ;
            margin: 0;
            
        }
        h1 {
            position: relative;
            margin: auto;
            font-size: 2rem;
            height: 50;
            letter-spacing: 5px;
            background-color: #A3B7BF;
            padding: 10px;
            width: 100%; 
            color: rgb(42, 45, 46);
        }
        form{
            width: 100%;
            margin: auto;
            margin-top: 50;
            max-width: 800px;
        }
        fieldset{
            background-color: #A3B7BF;
            border-radius: 16px;
            border: none;
            text-align: center;
            
        }
        legend{
            font-size: 1.8rem;
            font-weight: bold;
            /* background-color: #668693;
            border-radius: 16px; */
            padding: 10px;
        }
        table class="tabelbox" {
            border-collapse: separate;
            border-spacing: .5rem;
            width: 90%;
            margin: 30px auto;
        }
        .tabelbox tr td {
            width: 50%;

        }
        input[type="text"] , input[type="date"] , select , textarea {
            width: 100%;
            border: none;
            height: 58px;
            border-radius: 26px;
            padding: 1rem;
            outline: none;
            background-color: #DBDDDD;
            font-size: 1.2rem;
        }
        .tabelbox tr td:nth-child(1){
            text-align: right;
            font-size: 1.2rem;
            color: #0B1011;
            width: 30%;
            /* background-color: #668693; */
            border-radius: 26px 0 0 26px;
            padding: 1rem;
            font-weight: bold;

        }
    input[type="submit"]
    {
        border: none;
            height: 70px;
            border-radius: 30px;
            padding: 1rem;
            outline: none;
            background-color: #668693;
            font-size: 2rem;
            width: 30vh;
            color: white;
            letter-spacing: 7px;
            text-transform: uppercase;
            font-weight: bold;
    }
    input[type="submit"]:hover {
        background-color: #0B1011;
    }
    </style>


<?php
require ("koneksi.php");
$nikpelamar = $_GET['id'];
$sql = "SELECT * FROM datapelamar WHERE NIK='$nikpelamar'";
$tampildata = mysqli_query ($koneksi,$sql);
$datapelamar = mysqli_fetch_array ($tampildata);
?>

<h1>DATA PELAMAR</h1>
    <form action="update.php" method="post">
        <fieldset>
            <legend>Biodata Diri</legend>
            <table class="tabelbox">
                <tr>
                    <td>NIK</td>
                    <td><input type="text" name="NIK" value="<?php echo $datapelamar["NIK"];?>"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="studentname" value="<?php echo $datapelamar["nama"];?>"></td>
                </tr>
                <tr>
                    <td >Alamat</td>
                    <td><textarea placeholder="Alamat Sesuai KTP" name="alamat" style="resize: none; "><?php echo $datapelamar["alamat"] ;?></textarea></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="JK" value="Laki-laki" <?php if ($datapelamar ["JK"] == "Laki-laki") {echo "checked";}?>>Laki-laki
                        <input type="radio" name="JK" value="Perempuan" <?php if ($datapelamar ["JK"] == "Perempuan") {echo "checked";}?>>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td><input type="text" name="nohp" value="<?php echo $datapelamar["nohp"];?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $datapelamar["email"];?>"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatlahir" value="<?php echo $datapelamar["tempatlahir"];?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggallahir" value="<?php echo $datapelamar["tanggallahir"];?>"></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia" value="<?php echo $datapelamar["usia"];?>"></td>
                </tr>
            </table class="tabelbox">
        </fieldset>
   
        <fieldset>
            <legend>Pendidikan</legend>
            <table class="tabelbox">
                <tr>
                    <td>Jenjang Pendidikan</td>
                    <td>
                        <select name="pendidikan">
                            <option value=""></option>
                            <option value="SMA" <?php if ($datapelamar["pendidikan"] == "SMA") {echo "selected";}?>>SMA</option>
                            <option value="D3" <?php if ($datapelamar["pendidikan"] == "D3") {echo "selected";}?>>D3</option>
                            <option value="D4/S1" <?php if ($datapelamar["pendidikan"] == "D4/S1") {echo "selected";}?>>D4/S1</option>
                            <option value="S2" <?php if ($datapelamar["pendidikan"] == "S2") {echo "selected";}?>>S2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Universitas</td>
                    <td><input type="text" name="universitas" value="<?php echo $datapelamar["universitas"];?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $datapelamar["jurusan"];?>"></td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td><input type="text" name="IPK" value="<?php echo $datapelamar["IPK"];?>"></td>
                </tr>
            </table class="tabelbox">
        </fieldset>
    
        <fieldset>
            <legend>Pengalaman Kerja I</legend>
            <table class="tabelbox">
                <tr>
                    <td>Nama Perusahaan</td>
                    <td><input type="text" name="namaperusahaan1" value="<?php echo $datapelamar["Namaperusahaan1"];?>"></td>
                </tr>
                <tr>
                    <td>Jabatan terakhir</td>
                    <td><input type="text" name="jabatanterakhir1" value="<?php echo $datapelamar["jabatanterakhir1"];?>"></td>
                </tr>
                <tr>
                    <td>Tahun Bekerja</td>
                    <td><input type="text" name="tahunbekerja1" value="<?php echo $datapelamar["tahunbekerja1"];?>"></td>
                </tr>
            </table class="tabelbox">
        </fieldset>
    
        <fieldset>
            <legend>Pengalaman Kerja II</legend>
            <table class="tabelbox">
                <tr>
                    <td>Nama Perusahaan</td>
                    <td><input type="text" name="namaperusahaan2" value="<?php echo $datapelamar["Namaperusahaan2"];?>"></td>
                </tr>
                <tr>
                    <td>Jabatan terakhir</td>
                    <td><input type="text" name="jabatanterakhir2" value="<?php echo $datapelamar["jabatanterakhir2"];?>"></td>
                </tr>
                <tr>
                    <td>Tahun Bekerja</td>
                    <td><input type="text" name="tahunbekerja2" value="<?php echo $datapelamar["tahunbekerja2"];?>"></td>
                </tr>
            </table class="tabelbox">
        </fieldset>
    
        <fieldset>
            <table class="tabelbox">
                <tr>
                    <td>Posisi yang di lamar</td>
                    <td><input type="text" name="posisi" value="<?php echo $datapelamar["posisi"];?>"></td>
                </tr>
            </table class="tabelbox">
        </fieldset>
    
        <fieldset>
            <table class="tabelbox">
                <tr>
                    <td><input type="submit" name="update" value="update"></td>
                </tr>
            </table class="tabelbox">
        </fieldset>
    </form>
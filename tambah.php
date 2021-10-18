<?php

    require 'functions.php'

    //check submit button
    if(isset($_POST["submit"])) {
       
    //check data berhasil ditambahkan atau tidak
    if(mysqli_affected_rows($conn) >0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'database.php';
            </script>
        ";
    } 
    else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'database.php';
            </script>
        ";
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tambah Data Siswa</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Tambah Data Siswa</h1>
    <form action="" method="post">
    <ul>
        <li>    
            <label for="NRP">NIS :</label>
                <input type="text" name="NIS" id="NRP" required>
        </li>
        <li>
            <label for="NRP">Nama Lengkap :</label>
                <input type="text" name="Nama Lengkap" id="Nama Lengkap" required>
        </li>
        <li>
            <label for="NRP">Kelas :</label>
                <input type="text" name="Kelas" id="Kelas" required>
        </li>
        <li>
            <label for="Tempat Lahir">Tempat Lahir :</label>
                <input type="text" name="Tempat Lahir" id="Tempat Lahir" required>
        </li>
        <li>
            <label for="Tanggal Lahir">Tanggal Lahir</label>
                <input type="text" name="Tanggal Lahir" id="Tanggal Lahir" required>
        </li>
        <li>
            <label for="Agama">Agama:</label>
                <input type="text" name="Agama" id="Agama" required>
        </li>
        <li>
            <label for="Jenis Kelamin">Jenis Kelamin :</label>
                <input type="text" name="Jenis Kelamin" id="Jenis Kelamin"required>
        </li>
        <li>
            <label for="NISN">NISN :</label>
                <input type="text" name="NISN" id="NISN" required>
        </li>
        <li>
            <label for="NIK">NIK :</label>
                <input type="text" name="NIK" id="NIK" required>
        </li>
        <li>
            <label for="Alamat">Alamat :</label>
                <input type="text" name="Alamat" id="Alamat" required>
        </li>
        <li>
            <label for="No. Akta Lahir">No. Akkta Lahir :</label>
                <input type="text" name="No. Akta Lahir" id="No. Akta Lahir" required>
        </li>
        <li>
            <label for="No. Kartu Keluarga">No. Kartu Keluarga :</label>
                <input type="text" name="No. Kartu Keluarga" id="No. Kartu Keluarga" required>
        </li>
        <li>
            <label for="No. KIP">No. KIP :</label>
                <input type="text" name="No. KIP" id="No. KIP" required>
        </li>
        <li>
            <label for="No. Seri Ijazah SMP">No. Seri Ijazah SMP :</label>
                <input type="text" name="No. Seri Ijazah SMP" id="No. Seri IJazah SMP" required>
        </li>
        <li>
            <label for="SMP Asal">SMP Asal :</label>
                <input type="text" name="SMP Asal" id="SMP Asal" required>
        </li>
        <li>
            <label for="SD Asal">SD Asal :</label>
                <input type="text" name="SD Asal" id="SD Asal" required>
        </li>
        <li>
            <label for="Kordinat Rumah">Koordinat Rumah :</label>
                <input type="text" name="Koordinat Rumah" id="Koordinat Rumah" required>
        </li>
    </ul>
    <br><br><br>
    <ul>
        <li>
            <label for="Hobi">Hobi :</label>
                <input type="text" name="Hobi" id="Hobi">
        </li>
        <li>
            <label for="Minat">Minat :</label>
                <input type="text" name="Minat" id="Minat">
        </li>
        <li>
            <label for="Bakat">Bakat :</label>
                <input type="text" name="Bakat" id="Bakat">
        </li>
        <li>
            <label for="Prestasi">Prestasi :</label>
                <input type="text" name="Prestasi" id="Prestasi">
        </li>
        <li>
            <label for="Pelanggaran">Pelanggaran :</label>
                <input type="text" name="Pelanggaran" id="Pelanggaran">
        </li>
        <li>
            <label for="Melanjutkan ke Instansi">Melanjutkan ke Instansi :</label>
                <input type="text" name="Melanjutkan ke Instansi" id="Melanjutkan ke Instansi">
        </li>
    </ul>
    <br><br><br>
    <ul>
        <li>
            <label for="Nama Ayah">Nama Ayah :</label>
                <input type="text" name="Nama Ayah" id="Nama Ayah">
        </li>
        <li>
            <label for="Tempat Lahir Ayah">Tempat Lahir Ayah :</label>
                <input type="text" name="Tempat Lahir Ayah" id="Tempat Lahir Ayah">
        </li>
        <li>
            <label for="Tanggal Lahir Ayah">Tanggal Lahir Ayah :</label>
                <input type="text" name="Tanggal Lahir Ayah" id="Tanggal Lahir Ayah">
        </li>
        <li>
            <label for="Agama Ayah">Agama Ayah :</label>
                <input type="text" name="Agama Ayah" id="Agama Ayah">
        </li>
        <li>
            <label for="NIK Ayah">NIK Ayah :</label>
                <input type="text" name="NIK Ayah" id="NIK Ayah">
        </li>
        <li>
            <label for="">No. KTP Ayah</label>
                <input type="text" name="No. KTP Ayah" id="No. KTP Ayah">
        </li>
        <li>
            <label for="Pendidikan Terakhir Ayah">Penndidikan Terakhir Ayah :</label>
                <input type="text" name="Pendidikan Terakhir Ayah" id="Pendidikan Terakhir Ayah">
        </li>
        <li>
            <label for="Pekerjaan Ayah">Pekerjaan Ayah :</label>
                <input type="text" name="Pekerjaan Ayah" id="Pekerjaan Ayah">
        </li>
        <li>
            <label for="Gaji Ayah">Gaji Ayah :</label>
                <input type="text" name="Gaji Ayah" id="Gaji Ayah">
        </li>
        <br>
        <li>
            <label for="Nama Ibu">Nama Ibu :</label>
                <input type="text" name="Nama Ibu" id="Nama Ibu">
        </li>
        <li>
            <label for="Tempat Lahir Ibu">Tempat Lahir Ibu :</label>
                <input type="text" name="Tempat Lahir Ibu" id="Tempat Lahir Ibu">
        </li>
        <li>
            <label for="Tanggal Lahir Ibu">Tanggal Lahir Ibu :</label>
                <input type="text" name="Tanggal Lahir Ibu" id="Tanggal Lahir Ibu">
        </li>
        <li>
            <label for="Agama Ibu">Agama Ibu :</label>
                <input type="text" name="Agama Ibu" id="Agama Ibu">
        </li>
        <li>
            <label for="NIK Ibu">NIK Ibu :</label>
                <input type="text" name="NIK Ibu" id="NIK Ibu">
        </li>
        <li>
            <label for="No. KTP Ibu"></label>
                <input type="text" name="No. KTP Ibu" id="No. KTP Ibu">
        </li>
        <li>
            <label for="Pendidikan Terakhir Ibu">Pendidikan Terakhir Ibu :</label>
                <input type="text" name="Pendidikan Terakhir Ibu" id="Pendidikan Terakhir Ibu">
        </li>
        <li>
            <label for="Pekerjaan Ibu">Pekerjaan Ibu :</label>
                <input type="text" name="Pekerjaan Ibu" id="Pekerjaan Ibu">
        </li>
        <li>
            <label for="Gaji Ibu">Gaji Ibu :</label>
                <input type="text" name="Gaji Ibu" id="Gaji Ibu">
        </li>
    </ul>
        <br>
            <button type="submit" name="submit">Tambah Data</button> 
    </form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>
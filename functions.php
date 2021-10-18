<?php 
    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "datasiswa");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
              $rows[] = $row;
        }
    return $rows;
    }

    function tambah($data) {
        global $conn;

        $nis = htmlspecialchars($data["NIS"]);
        $nama_lengkap = htmlspecialchars($data["Nama Lengkap"]);
        $kelas = htmlspecialchars($data["Kelas"]);
        $tempat_lahir = htmlspecialchars($data["NIS"]);
        $tanggal_lahir = htmlspecialchars($data["Tanggal Lahir"]);
        $agama = htmlspecialchars($data["Agama"]);
        $jenis_kelamin = htmlspecialchars($data["Jenis Kelamin"]);
        $nisn = htmlspecialchars($data["nisn"]);
        $nik = htmlspecialchars($data["NIK"]);
        $alamat = htmlspecialchars($data["Alamat"]);
        $no_akta = htmlspecialchars($data["No. Akta Lahir"]);
        $no_kk = htmlspecialchars($data["No. Kartu Keluarga"]);
        $no_kip = htmlspecialchars($data["No. KIP"]);
        $no_seri = htmlspecialchars($data["No. Seri Ijazah SMP"]);
        $smp_asal = htmlspecialchars($data["SMP Asal"]);
        $sd_asal = htmlspecialchars($data["SD Asal"]);
        $koordinat_rumah = htmlspecialchars($data["Koordinat Rumah"]);
        $jarak_kesekolah = htmlspecialchars($data["Jarak Rumah ke Sekolah"]);
        $hobi = htmlspecialchars($data["Hobi"]);
        $minat = htmlspecialchars($data["Minat"]);
        $bakat = htmlspecialchars($data["Bakat"]);
        $prestasi = htmlspecialchars($data["Prestasi"]);
        $pelanggaran = htmlspecialchars($data["Pelanggaran"]);
        $nama_ayah = htmlspecialchars($data["Nama Ayah"]);
        $tempat_lahirayah = htmlspecialchars($data["Tempat Lahir Ayah"]);
        $tanggal_lahirayah = htmlspecialchars($data["Tanggal Lahir Ayah"]);
        $agama_ayah = htmlspecialchars($data["Agama Ayah"]);
        $nik_ayah = htmlspecialchars($data["NIK Ayah"]);
        $noktp_ayah = htmlspecialchars($data["No. KTP Ayah"]);
        $pendidikan_ayah = htmlspecialchars($data["Pendidikan Terakhir Ayah"]);

        $query = "INSERT INTO datapersonalsiswa
                    VALUES
                (' ', '$nis', '$nama_lengkap', '$kelas', '$tempat_lahir', $tanggal_lahir', '$agama', '$jenis_kelamin', '$nisn', '$nik', '$alamat',
                '$no_akta', '$no_kk', '$no_kip', '$no_seri', '$smp_asal', '$sd_asal', '$koordinat_rumah', '$jarak_kesekolah', '$hobi', '$minat', '$bakat',
                '$prestasi', '$pelanggaran', '$nama_ayah', '$tempat_lahirayah', '$tanggal_lahir', '$agama_ayah', '$nik_ayah', '$noktp_ayah', '$pendidikan_ayah')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>
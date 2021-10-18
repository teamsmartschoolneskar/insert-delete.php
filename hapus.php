<?php

    require 'functions.php';

    $id = $_GET["id"];

    if(hapus($id) > 0) {
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

    function hash_update_stream($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM datapersonalsiswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
?>
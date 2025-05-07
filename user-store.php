<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "INSERT INTO users (nama_user, username, password) VALUES ('$nama','$username','$password')";

    $query = $conn->query($sql);

    if ($query) {
        ?>
            <script>
                window.alert("Berhasil Tambah");
                window.location.href = "user-read.php";
            </script>
        <?php
    }else{
        ?>
            <script>
                window.alert("Gagal Tambah");
                window.location.href = "user.php";
            </script>
        <?php
    }
    }

?>
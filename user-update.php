<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $sql = "UPDATE users SET nama_user ='$nama',username ='$username',password ='$password' WHERE id_user = '$id_user'";

    $query = $conn->query($sql);

    if ($query) {
        ?>
            <script>
                window.alert("Berhasil Update");
                window.location.href = "user-read.php";
            </script>
        <?php
    }else{
        ?>
            <script>
                window.alert("Gagal Update");
                window.location.href = "user.php";
            </script>
        <?php
    }
    }

?>
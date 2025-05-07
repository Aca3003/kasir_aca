<?php
include "koneksi.php";

if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
  
    $sql = "DELETE FROM users WHERE id_user='$id_user'";

    $query = $conn->query($sql);

    if ($query) {
        ?>
            <script>
                window.alert("Berhasil Hapus");
                window.location.href = "user-read.php";
            </script>
        <?php
    }else{
        ?>
            <script>
                window.alert("Gagal Hapus");
                window.location.href = "user.php";
            </script>
        <?php
    }
    }

?>
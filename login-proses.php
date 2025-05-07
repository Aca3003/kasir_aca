<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";

        $query = $conn->query($sql);

        if ($query) {
            $result = $query->fetch_assoc() ;
            session_start();
            $_SESSION['user'] = $result;
            ?>
                <script>
                    window.alert("Berhasil Login");
                    window.location.href = "dashboard.php";
                </script>
            <?php
        }else{
            ?>
                <script>
                    window.alert("Gagal Login");
                    window.location.href = "login.php";
                </script>
            <?php
        }
    }
}
?>
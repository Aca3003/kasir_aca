<?php 
include "koneksi.php";

$id_user = $_GET['id_user'];

$sql = "SELECT * FROM users WHERE id_user = '$id_user'";

$query = $conn->query($sql);

$result = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="asset/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>USER EDIT</h1>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="user-update.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama User</label>
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $result['id_user']?>">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" value="<?php echo $result['nama_user']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $result['username']?>" placeholder="Masukan username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $result['password']?>" placeholder="Masukan password" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <script src="asset/js/bootstrap.bundle.js"></script>
</body>

</html>
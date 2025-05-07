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
                <h1>USER</h1>
            </div>
        </div>
        <div class="row">

            <div class="col">
                <a href="user.php" class="btn btn-success mt-3 mb-3">+Tambah</a>
                <table class="table table-dark table-striped">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama User</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $no = 1;
                    $sql = "SELECT * FROM users";

                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {


                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td class="text-center"><?= $row['nama_user'] ?></td>
                            <td class="text-center"><?= $row['username'] ?></td>
                            <td class="text-center"><?= $row['password'] ?></td>
                            <td class="text-center">
                            <a href="user-edit.php?id_user=<?= $row['id_user'] ?>" class="btn btn-warning">EDIT</a>
                                <a href="user-delete.php?id_user=<?= $row['id_user'] ?>" onclick="return confirm('Yakin Ingin di Hapus akun ini <?= $row['username'] ?>')" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>

    <script src="asset/js/bootstrap.bundle.js"></script>
</body>

</html>
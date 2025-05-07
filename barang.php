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
            <div class="col"></div>
            <div class="col">
                <form action="user-store.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama barang</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">harga barang</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">stok</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Masukan password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">satuan</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Masukan password" required>
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
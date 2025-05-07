<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap online-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="asset/css/bootstrap.css">
</head>

<body>
<div class="container">
        <div class="row justify-content-center" style="margin-top: 100px;">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <!-- Ganti dengan URL logo yang sesuai -->
                    <img src="https://e7.pngegg.com/pngimages/941/619/png-clipart-cash-register-pay-text-logo.png" alt="User Logo" class="img-fluid" style="width: 100px;">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Login</h4>
                        <form action="login-proses.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="asset/js/bootstrap.bundle.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>

</html>

<?php
session_start();
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
    <h1>Selamat datang di Dashboard si <?php echo $_SESSION['user']['nama_user']?></h1>
    <h1>Selamat datang di Dashboard si <?php echo $_SESSION['user']['username']?></h1>

<script src="asset/js/bootstrap.bundle.js"></script>
</body>
</html>
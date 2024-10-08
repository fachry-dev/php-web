<?php
$nama = $_GET["nama"];
$email = $_GET["email"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>
<body>
    <h1>Data Berhasil Ditambahakan!</h1>
    <p>Nama: <?= $nama ?></p>
    <p>email: <?= $email ?></p>
</body>
</html>
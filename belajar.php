<?php
echo"Belajar aja";
$judul = "Belajara PHP web";
$body = "Form Data Diri";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
</head>
<body>
    <h1>
        <?= $body?>
    </h1>
    
    <form action="submit.php" method="get">
        <input type="text" name="nama"/>
        <input type="email" name="email"/>
        <button type="submit">Submit</button>
    </form>

    

</body>
</html>
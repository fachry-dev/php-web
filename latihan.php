<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9]; //array indexing
$numbers2 =[
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$students = [
    ["nama" => "Bryant", "NISN" => "12345"],
    ["nama" => "James", "NISN" => "54321"],
    ["nama" => "jackson", "NISN" => "12342"],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/icons/fontawesome_icons_intro.asp ">
    <style>
        .square {
            padding: 10px;
            background-color: greenyellow;
            float: left;
            margin-right: 5px;
            color: #212121;
        }
        .clear{
            clear: both;
        }
        .kotak{
            padding: 10px;
            background-color: orange;
            float: left;
            color: wheat;
            text-align: center;
            line-height: 5px;
            margin-right: 5px;
            transition: 1s all;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        table{
            border-collapse: collapse;
        }

        th, td{
            padding: 10px;
            text-align: left;
        }
        th{

            background-color: greenyellow;
            color: blueviolet;
        }
    </style>
</head>

<body>
    <?php foreach ($numbers as $angka) : ?>
        <div class="square"><?= $angka ?></div>
    <?php endforeach ?>

    <div class="clear"></div>

    <br>

    <?php foreach($numbers2 as $angka): ?>
        <?php foreach ($angka as $item) : ?> 
            <div class="kotak"><?= $item?></div>
        <?php endforeach ?>
        <div class="clear"></div>
    <?php endforeach ?>

    <hr />
    <h1>Daftar Siswa</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $siswa) : ?>
            <tr>
                <td><?= $siswa["nama"] ?></td>
                <td><?= $siswa["NISN"] ?></td>
                <td>
                    <a href="latihan2.php?nama=<?=$siswa["nama"] ?>&nisn=<?=$siswa["NISN"] ?>">
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
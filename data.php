<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "";

$nim =  (isset($_POST['nim'])) ? $_POST['nim'] : NULL;
$nama =   (isset($_POST['nama'])) ? $_POST['nama'] : NULL;
$matakuliah = (isset($_POST['matkul'])) ? $_POST['matkul'] : NULL;
$uts =  (isset($_POST['uts'])) ? $_POST['uts'] : NULL;
$uas =   (isset($_POST['uas'])) ? $_POST['uas'] : NULL;
$nilai_tugas = (isset($_POST['nilai_tugas'])) ? $_POST['nilai_tugas'] : NULL;

$data = [
    [
        "nim" => 011022002,
        "nama" =>  "Annisa Munajalipah",
        "matkul" => "Jaringan Komputer",
        "uts" => 90,
        "uas" => 90,
        "nilai_tugas" => 90,
    ],
    [
        "nim" => 01223422,
        "nama" => "Sasa",
        "matkul" => "Bahasa Inggris",
        "uts" => 85,
        "uas" => 85,
        "nilai_tugas" => 80,
    ],
    [
        "nim" => 01567826,
        "nama" => "Ani",
        "matkul" => "PKN",
        "uts" => 100,
        "uas" => 100,
        "nilai_tugas" => 90,
    ],
    [
        "nim" => $nim,
        "nama" => $nama,
        "matakuliah" => $matakuliah,
        "uts" => $uts,
        "uas" => $uas,
        "nilai_tugas" => $nilai_tugas,
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page ?></title>
    <style>
        .menu {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #F5F5DC;
            color: #7FFFD4;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    switch ($page) {
        case 'form':
            include "nilai.php";
            break;
        case '':
            require_once 'funct.php';
            include "datasiswa.php";
            break;
    }
    ?>
    <div class="menu">
        <h3>Annisa</h3>
    </div>
</body>

</html>
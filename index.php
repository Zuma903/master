<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tugas 1.2</title>

    <style>
        .container {
            width: 960px;
            margin: auto;
            border: 3px black solid;
            padding: 30px;
            background-color: silver;
        }

        h1 {
            font-style: bold;
            text-align: center;
            margin-bottom: 70px;
        }

        p {
            text-align: left;
            margin: 5px;
        }

    </style>

</head>
<body>

    <div class="container">

        <h1>Tugas Ekstra Web Desain 1.2</h1>

        <?php

            $nama = "Rahmat Wahyuma Akbar";
            $kelas = "X-RPL 1";
            $absen = "31";

        ?>

        <p>Halo!. Perkenalkan nama saya <?= $nama ?></p>

        <p>Saya kelas <?= $kelas ?></p>

        <p>Nomor absen saya di Kelas, nomor <?= $absen ?></p>

    </div>
    
</body>
</html>
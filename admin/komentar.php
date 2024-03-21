<?php
require "../koneksi.php";

$komen = query($koneksi, "SELECT * FROM komentar");

    include "header.php";

    include "menu.php";

    ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            width: 80%; 
            margin-top: 20px;
            margin-bottom: 100px;
            margin-right: 10px
        }
        tr th {
            text-align: center;
            width: 25%;
            background : #413839;
            color : white;
        }
        tr td {
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Komentar</th>
            <th>Tanggal</th>
        </tr>
        <?php $i = 1; foreach($komen as $k): ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $k['email'] ?></td>
                <td><?php echo $k['komentar'] ?></td>
                <td><?php echo $k['tanggal'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
        include "footer.php";
    ?>
</body>
</html>



<?php
    require "../koneksi.php";

    $data = query($koneksi,"SELECT * FROM biodata");

    session_start();
    if(!isset($_SESSION["login"])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style untuk tombol edit dan hapus */
        .edit, .hapus {
            font-size: 1.2rem;
            margin-right: 5px;
        }

        .edit:hover {
            color: #C58917;
        }

        .hapus:hover {
            color: #8F0B0B;
        }

        /* Style untuk header table */
        tr th {
            background-color: #413839;
            color: black;
            text-align: center;
        }

        /* Style untuk isi table */
        tr td {
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
    include "header.php";
    include "menu.php";
?>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-5 pb-4">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Asal</th>
                    <th>Email</th>
                    <th>SD</th>
                    <th>SMP</th>
                    <th>SMP II</th>
                    <th>SMK</th>
                    <th>Kuliah</th>
                    <th>Hobbi1</th>
                    <th>Hobbi2</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($data as $d) : ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['umur'] ?></td>
                    <td><?php echo $d['asal'] ?></td>
                    <td><?php echo $d['email'] ?></td>
                    <td><?php echo $d['sd'] ?></td>
                    <td><?php echo $d['smp'] ?></td>
                    <td><?php echo $d['smp2'] ?></td>
                    <td><?php echo $d['smk'] ?></td>
                    <td><?php echo $d['kuliah'] ?></td>
                    <td><?php echo $d['hobbi'] ?></td>
                    <td><?php echo $d['hobbi2'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d['id']; ?>" class="edit"><i class="bi bi-pencil-square"></i></a>
                        <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus data Ini ?')" href="hapus.php?id=<?php echo $d['id'] ?>" class="hapus"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include "footer.php";
?>
<!-- Bootstrap Bundle dengan Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  require "koneksi.php";
  $biodata = query($koneksi, "SELECT * FROM biodata");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Resume</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .rounded-circle {
            width: 200px;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
        }
        .foto {
        width: 200px;
        height: 200px;
        cursor: pointer;
        }
        .link a {
        display: none;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark" id="neubar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#biodata">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pendidikan">Pendidikan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hobbi">Hobi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sosmed">Sosial Media</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="admin/login.php">Login</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>


<section id="home" class="container-fluid intro mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1>Hai Everyone</h1>
            <?php foreach ($biodata as $b):?>
            <h2>I'm <b><?= $b['nama']?></b></h2>
            <h5 class="mb-3">I'm Student</h5>
            <?php endforeach ?>
        </div>
        <div class="col-md-4 text-center">
            <img class="img-fluid rounded-circle foto" src="foto.jpg" alt="" onclick="alert('Halo nama saya M. Dhafa Raihansyah')">
        </div>
    </div>
</section>

<section id="biodata" class="py-3">
    <div class="container">
        <h1>Biodata Saya</h1>
        <?php foreach($biodata as $b): ?>
        <p><?= $b['nama'] ?></p>
        <p>Umur saya saat ini baru <?= $b['umur'] ?></p>
        <p>Asal saya dari <?= $b['asal'] ?></p>
        <p>Email saya <?= $b['email'] ?></p>
        <?php endforeach ?>
    </div>
</section>

<section id="pendidikan" class="py-3">
    <div class="container">
        <h1>Riwayat Pendidikan</h1>
        <?php foreach ($biodata as $b): ?>
        <p><?= $b['sd'] ?>(2011 - 2017)</p>
        <p><?= $b['smp'] ?>(2017 - 2018)</p>
        <p><?= $b['smp2'] ?>(2018 - 2020)</p>
        <p><?= $b['smk'] ?>(2020 - 2023)</p>
        <p><?= $b['kuliah'] ?>(2023 - Sekarang)</p>
        <?php endforeach ?>
    </div>
</section>

<section id="hobbi" class="py-2">
    <div class="container">
        <h1>Hobi Saya</h1>
        <?php foreach ($biodata as $b): ?>
        <ul>
            <li style="color : white">Hobbi pertama saya <?= $b['hobbi'] ?></li>
            <li>Hobbi kedua saya <?= $b['hobbi2'] ?></li>
        </ul>
        <?php endforeach ?>
    </div>
</section>


<section id="sosmed" class="py-3 mt-2">
    <p style="color: white; font-size: 40px; text-align : center;"><b>Sosial Media</b></p>
        <div class="link mt-1 ms-3 text-center">
            <a href="https://www.instagram.com/markodap/" style="font-size: 45px; color: white" class="btn"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/628979164178?" style="font-size: 45px; color: white" class="btn"><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/m-dhafa-raihansyah-4a0274278/" style="font-size: 45px; color: white" class="btn"><i class="fab fa-linkedin"></i></a>
        </div>
</section>

<section class="py-3 mt-2">
    <div class="container">
        <h1 style="color: white">Daftar Komentar</h1>
        <?php
        // Lakukan koneksi ke database atau impor file koneksi jika diperlukan
        require "koneksi.php";

        // Ambil data komentar dari database, diurutkan berdasarkan tanggal terbaru
        $komentar_query = "SELECT * FROM komentar ORDER BY tanggal DESC";
        $result = mysqli_query($koneksi, $komentar_query);

        // Pastikan query berhasil
        if($result && mysqli_num_rows($result) > 0) {
            // Tampilkan komentar
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title" style="color : black">Email: <?php echo $row['email']; ?></h5>
                        <p style="color : black" class="card-text">Komentar: <?php echo $row['komentar']; ?></p>
                        <p style="color : black" class="card-text">Tanggal: <?php echo $row['tanggal']; ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>Tidak ada komentar.</p>";
        }

        // Tutup koneksi ke database jika tidak lagi digunakan
        mysqli_close($koneksi);
        ?>
    </div>
</section>



<section id="form-komentar" class="py-3 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0 text-center" style="color: black; font-size: 30px">Form Komentar</h5>
                    </div>
                    <div class="card-body">
                        <form id="comment-form" action="simpan_komentar.php" method="POST">
                            <div class="mb-3">
                                <input type="email" placeholder="Masukkan Email" class="form-control" id="email" name="email" style="font-size: 20px" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Masukkan Saran dan Pesan Anda" id="saran" name="komentar" rows="3" style="font-size: 20px" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 20px">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $(".foto").click(function(){
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".link a").each(function(index) {
            $(this).delay(500 * index).fadeIn(1000); // Menampilkan setiap tautan dengan efek fade dalam interval waktu tertentu
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

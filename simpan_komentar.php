<?php
    require "koneksi.php";

    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $tanggal = date("Y-m-d");

    // Simpan data ke dalam database
    $sql = "INSERT INTO komentar (email, komentar, tanggal) VALUES ('$email', '$komentar', '$tanggal')";

    if ($koneksi->query($sql) === TRUE) {
        // Menampilkan pesan sukses menggunakan JavaScript
        echo "<script>alert('Komentar berhasil disimpan.');window.location.replace('index.php');</script>";
    } else {
        // Menampilkan pesan gagal menggunakan JavaScript
        echo "<script>alert('Error: Gagal membuat komentar.');</script>";
    }

    // Tampilkan komentar berdasarkan tanggal
    $sql = "SELECT email, komentar, tanggal FROM komentar WHERE tanggal = CURDATE()";

    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "email: " . $row["email"]. " - Komentar: " . $row["komentar"]. " - Tanggal: " . $row["tanggal"]. "<br>";
        }
    } else {
        echo "Tidak ada komentar untuk hari ini.";
    }

    $koneksi->close();
?>

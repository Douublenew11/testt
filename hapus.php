<?php
require "koneksi.php";

$id = $_GET['id'];

// Pastikan ID tersedia
if (isset($id)) {
    // Hapus data dari tabel berdasarkan ID
    $query = "DELETE FROM biodata WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        echo "<script>alert('Berhasil Hapus Data!');window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Gagal Hapus Data!');</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan!');</script>";
}
?>

<?php
require 'koneksi.php';

$id = $_POST['id'];

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
$asal = mysqli_real_escape_string($koneksi, $_POST['asal']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$sd = mysqli_real_escape_string($koneksi, $_POST['sd']);
$smp = mysqli_real_escape_string($koneksi, $_POST['smp']);
$smp2 = mysqli_real_escape_string($koneksi, $_POST['smp2']);
$smk = mysqli_real_escape_string($koneksi, $_POST['smk']);
$kuliah = mysqli_real_escape_string($koneksi, $_POST['kuliah']);
$hobbi = mysqli_real_escape_string($koneksi, $_POST['hobbi']);
$hobbi2 = mysqli_real_escape_string($koneksi, $_POST['hobbi2']);

$query = "UPDATE biodata SET 
            nama = '$nama',
            umur = '$umur',
            asal = '$asal',
            email = '$email',
            sd = '$sd',
            smp = '$smp',
            smp2 = '$smp2',
            smk = '$smk',
            kuliah = '$kuliah',
            hobbi = '$hobbi',
            hobbi2 = '$hobbi2'    
            WHERE id = $id";

$result = mysqli_query($koneksi, $query);

if($result) {
    echo "<script>alert('Berhasil Update Data!');window.location.href = 'data.php'</script>";
} else {
    echo "<script>alert('Gagal Update Data!');window.location.href = 'data.php'</script>";
}
?>

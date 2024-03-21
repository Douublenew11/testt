<?php   
$koneksi = mysqli_connect('localhost', 'root', '', 'uts2');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (!function_exists('query')) {
    function query($koneksi, $query) {
        $data = mysqli_query($koneksi, $query);
        if(!$data) {
            echo "Error: " . mysqli_error($koneksi);
            return false; // Mengembalikan false jika terjadi kesalahan dalam eksekusi query
        }
        $hasil = [];
        while($d = mysqli_fetch_assoc($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
}

?>

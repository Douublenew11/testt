<?php
require "../koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
while($d = mysqli_fetch_array($data)){
$produk = query($koneksi,"SELECT * FROM biodata WHERE id = $id")[0];
if(isset($_POST['update'])){
    $nama = htmlspecialchars($_POST['nama']);
    $umur = htmlspecialchars($_POST['umur']);
    $asal = htmlspecialchars($_POST['asal']);
    $email = htmlspecialchars($_POST['email']);
    $sd = htmlspecialchars($_POST['sd']);
    $smp = htmlspecialchars($_POST['smp']);
    $smp2 = htmlspecialchars($_POST['smp2']);
    $smk = htmlspecialchars($_POST['smk']);
    $kuliah = htmlspecialchars($_POST['kuliah']);
    $hobbi = htmlspecialchars($_POST['hobbi']);
    $hobbi2 = htmlspecialchars($_POST['hobbi2']);

    
    // Perbarui data dalam database tanpa mengubah gambar
    $deteksi = tambah($koneksi,"UPDATE biodata SET nama = '$nama', umur = '$umur' asal = '$asal' email = '$email' sd = '$sd' smp = '$smp' smp2 = '$smp2' smk = '$smk' kuliah = '$kuliah' hobbi = '$hobbi' hobbi2 = '$hobbi2' WHERE id = $id");
    
    // Tangani hasil dari operasi update
    if($deteksi == true){
        echo "<script>alert('Berhasil Update Data!');window.location.href = 'data.php'</script>";
    } else {
        echo "<script>alert('Gagal Update Data!');window.location.href = 'data.php'</script>";
    }
}

?>
<form method="post" action="update.php">
	<table>
		<tr>			
			<td>Nama</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>Umur</td>
			<td><input type="text" name="umur" value="<?php echo $d['umur']; ?>"></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal" value="<?php echo $d['asal']; ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
		</tr>
		<tr>
			<td>SD</td>
			<td><input type="text" name="sd" value="<?php echo $d['sd']; ?>"></td>
		</tr>
		<tr>
			<td>SMP</td>
			<td><input type="text" name="smp" value="<?php echo $d['smp']; ?>"></td>
		</tr>
		<tr>
			<td>SMP II</td>
			<td><input type="text" name="smp2" value="<?php echo $d['smp2']; ?>"></td>
		</tr>
		<tr>
			<td>SMK</td>
			<td><input type="text" name="smk" value="<?php echo $d['smk']; ?>"></td>
		</tr>
		<tr>
			<td>Kuliah</td>
			<td><input type="text" name="kuliah" value="<?php echo $d['kuliah']; ?>"></td>
		</tr>
		<tr>
			<td>Hobi1</td>
			<td><input type="text" name="hobbi" value="<?php echo $d['hobbi']; ?>"></td>
		</tr>
		<tr>
			<td>Hobi2</td>
			<td><input type="text" name="hobbi2" value="<?php echo $d['hobbi2']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="simpan"></td>
		</tr>		
	</table>
</form>
<?php 
}
?>

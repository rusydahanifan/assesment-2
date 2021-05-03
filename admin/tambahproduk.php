<h2>DATA INDEKS PRESTASI KUMULATIF MAHASISWA</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Semester mahasiswa</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label></label>
		<input type="number" class="form-control" name="harga">
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save'])) 
{
 	
 	$koneksi->query("INSERT INTO Produk
 		(nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk)
 	VALUES('$_POST[nama]')");

 	echo"<div class='alert alert-info'>Data tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'";
 } 
 ?>

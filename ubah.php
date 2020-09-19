<?php
require 'functions.php';

$id = $_GET["id"];

$f = query("SELECT * FROM film WHERE id = $id")[0];


if( isset($_POST["ubah"]) ) {

	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data film</title>
</head>
<body>
	<h1>Ubah data film</h1>

	<form action="" method="post">
		<input type="hidden" name="id" required value="<?= $f["id"]; ?>">
		<ul>
			<li>
				<label for="judul">Judul</label>
				<input type="text" name="judul" id="judul" required value="<?= $f["judul"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" value="<?= $f["gambar"]; ?>">
			</li>
			<li>
				<label for="genre">Genre</label>
				<input type="text" name="genre" id="genre" value="<?= $f["genre"]; ?>">
			</li>
			<li>
				<label for="tgl_rilis">Tanggal Rilis</label>
				<input type="text" name="tgl_rilis" id="tgl_rilis" value="<?= $f["tgl_rilis"]; ?>">
			</li>
			<li>
				<label for="kel_usia">Kelompok Usia</label>
				<input type="text" name="kel_usia" id="kel_usia" value="<?= $f["kel_usia"]; ?>">
			</li>
			<li>
				<button type="submit" name="ubah">Ubah Data</button>
				<button><a href="admin/index.php">Kembali</a></button>
			</li>
		</ul>

	</form>




</body>
</html>
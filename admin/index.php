<?php 

	require '../functions.php';
	$film = query("SELECT * FROM film");

	if (isset($_POST['cari'])) {
		$film = cari($_POST["keyword"]);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3 | Admin</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
	<style>
		h1 {
			color: white;
			text-align: center;
			font-family: 'Courgette', cursive;
		}

		th, .no {
			font-family: 'Courgette', cursive;
		}

		.gambar {
			width: 200px;
		}

		table {
			margin: auto;
			text-align: center;
			font-family: 'Archivo', sans-serif;
		}

		th, .no {
			background-color: #66ff99;
		}

		td {
			background-color: white;
		}

		td a {
			color: black;
		}

		td a:hover {
			background-color: #66ff99;
			color: lightskyblue;
		}

		button.tambah {
			margin-left: 104px;
			margin-bottom: 5px;
		}

		.form-control {
			margin-left: 104px;
			margin-bottom: 5px;
		}

		.data {
			color: black;
		}

		body {
			background-color: #66ccff;
		}

		.logout {
			float: right;
		}

		.clear {
			clear: both;
		}
	</style>
</head>
<body>

	<a href="../index.php" class="logout"><button>Logout</button></a>

	<div class="clear"></div>

	<h1>Daftar film 2019</h1>

	<a href="../tambah.php"><button class="tambah">Tambah Data</button></a>
	<br>

	<form action="" method="post">
		<input type="text" name="keyword" id="search" class="form-control" placeholder="Search...">
		<button type="submit" name="cari" id="cari">Cari</button>
	</form>


	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No</th>
			<th></th>
			<th>Judul</th>
			<th>Gambar</th>
			<th>Genre</th>
	        <th>Tanggal rilis</th>
	        <th>Kelompok usia</th>
		</tr>



			<?php $i = 1; ?>
			<?php foreach( $film as $f ) : ?>
			<tr>
				<td class="no"><?= $i; ?></td>
				<td>
					<a href="../ubah.php?id=<?= $f["id"]; ?>">Ubah</a> |
					<a href="../hapus.php?id=<?= $f["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');">Hapus</a>
				</td>
				<td><?= $f["judul"]; ?></td>
				<td><img src="../assets/img/<?= $f["gambar"] ?>" width="200px"></td>
				<td><?= $f["genre"]; ?></td>
				<td><?= $f["tgl_rilis"]; ?></td>
				<td><?= $f["kel_usia"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
	
		
	</table>

</body>
</html>
<?php 

	require 'functions.php';
	$film = query("SELECT * FROM film");

	if (isset($_POST['cari'])) {
		$film = cari($_POST["keyword"]);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
	<style>
		h1 {
			color: red;
			text-align: center;
			font-family: 'Courgette', cursive;
			text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
		}

		th, .no {
			font-family: 'Courgette', cursive;
		}

		.gambar {
			width: 200px;
		}

		table {
			background-color: black;
			margin: auto;
			text-align: center;
			font-family: 'Archivo', sans-serif;
			color: white;
		}

		.formsearch {
			margin-left: 550px;
			margin-bottom: 10px;
		}

		.data {
			color: black;
		}

		
		td a {
			color: white;
		}

		td a:hover {
			color: red;
			background-color: #66ff99;
			padding: 5px;
			border-radius: 75%;
		}

		.login {
			float: right;
		}

		.clear {
			clear: both;
		}
		a p {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">

		<a href="admin/admin.php" class="login"><button>Login as Admin</button></a>
		<div class="clear"></div>

		<h1>Daftar film 2019</h1>
		<br>

		<form action="" method="post" class="formsearch">
			<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search..." autocomplete="off" >
			<button type="submit" name="cari" id="cari">Cari</button>
		</form>


		<table border="1" cellpadding="10" cellspacing="0">

			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Gambar</th>
				<th>Genre</th>
		        <th>Tanggal rilis</th>
		        <th>Kelompok usia</th>
			</tr>

			

				<?php $i = 1; ?>
				<?php foreach($film as $f ) : ?>
				<tr>
					<td class="no"><?= $i; ?></td> 
					<td><a href="profil.php?id=<?=$f['id'];?>"><?= $f['judul'] ?></a></td>
					<td><img src="assets/img/<?= $f["gambar"] ?>" width="200px"></td>
					<td><?= $f["genre"]; ?></td>
					<td><?= $f["tgl_rilis"]; ?></td>
					<td><?= $f["kel_usia"]; ?></td>
				</tr>
				<?php $i++; ?>
				<?php endforeach; ?>
			
			
		</table>

		<a href="../index.php"><p align="center" style="color: black; font-family: italic; display: inline-block; ">INDEX</p></a>
	</div>

</body>
</html>
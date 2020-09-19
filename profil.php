<?php 
	if (!isset($_GET['id'])) {
		header("Location : index.php");
		exit;
	}

	require 'functions.php';
	$id = $_GET["id"];

	$f = query("SELECT * FROM film WHERE id = $id")[0];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Detail film</title>
 	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
 	<style>
 		h1 {
 			text-align: center;
 			font-family: 'Courgette', cursive;
 		}

 		.container {
			width: 65%;
			background-color: #66ff99;
			border: 1px solid black;
			margin: auto;
			border-radius: 15px;
		}

		table {
			color: black;
			font-family: 'Archivo', sans-serif;
		}

		th {
			background-color: #4dd2ff;
		}

		td {
			background-color: white;
		}

		p a {
			color: white;
			text-decoration: none;
			font-family: 'Archivo', sans-serif;
			border: 1px solid black;
			padding: 5px;
			background-color: #ff6666;
			font-weight: bold;
		}

		p a:hover {
			color: black;
			background-color: white;
			font-weight: bold;
		}

		.gambar {
			width: 200px;
		}

		th {
			font-family: 'Courgette', cursive;
		}
 	</style>
 </head>
 <body>
 	<div class="container">
 	<h1>Detail film</h1>

 	<table border="1" cellspacing="0" cellpadding="5" align="center">
	 	<tr class="hdr">
			<th>Judul</th>
			<th>Gambar</th>
			<th>Genre</th>
	        <th>Tanggal rilis</th>
	        <th>Kelompok usia</th>
	 	</tr>
		<tr>
 			<td align="center"><?= $f['judul']; ?></td>
 			<td align="center"><img class="gambar" src="assets/img/<?= $f["gambar"] ?>"></td>
 			<td align="center"><?= $f['genre']; ?></td>
 			<td align="center"><?= $f['tgl_rilis']; ?></td>
 			<td align="center"><?= $f['kel_usia']; ?></td>
 		</tr>
	 </table>

	 <p align="center"><a href="index.php">Kembali</a></p>
	 </div>
 </body>
 </html>
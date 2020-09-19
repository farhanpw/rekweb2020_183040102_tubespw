<?php 

require 'functions.php';
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
			alert('Data Berhasil Ditambahkan!');
			document.location.href = 'admin/index.php';
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal Ditambahkan!');
			document.location.href = 'admin/index.php';
		</script>";
	}
	
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah judul film</title>
 	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
 	<style>
 		.container {
 			width: 700px;
 			margin: auto;
 			padding: 20px;
 			background-color: red;
 		}

 		h1 {
 			text-align: center;
 			font-family: 'Courgette', cursive;
 			color: gold;
 		}

 		* {
		  box-sizing: border-box;
		}

		button a {
			color: black;
			text-decoration: none;
		}

		form {
		  padding: 2px;
		  background-color: #f9f9f9;
		  margin-top: 5px;
		  max-width: 600px;
		  margin-left: auto;
		  margin-right: auto;
		  padding: 10px;
		}

		form input {
		  margin-bottom: 10px;
		  background-color: #fff;
		}

		form button {
		  background-color: lightgrey;
		  padding: 10px;
		  border: 0;
		}

		form button:hover {
		  background: gold;
		}

		label {
		  text-align: right;
		  display: block;
		  padding: 10px 45px 10px 0;
		}

		input {
		  width: 100%;
		  padding: 0.7em;
		  margin-bottom: 0.5rem;
		}

		input:focus {
		  outline: 3px solid gold;
		}

		@media (min-width: 400px) {
		  form {
		    overflow: hidden;
		  }

		  label {
		    float: left;
		    width: 200px;
		  }

		  input {
		    float: left;
		    width: calc(100% - 200px);
		  }

		  button {
		    float: right;
		    width: calc(100% - 200px);
		  }
 	</style>
 </head>
 <body>
 	<div class="container">
 	<h1>Tambah film</h1>

 	<form action="" method="post">
 		<label for="judul">Judul</label>:
 		<input type="text" name="judul" id="judul"><br>
 		<label for="gambar">Gambar</label>:
 		<input type="text" name="gambar" id="gambar"><br>
 		<label for="genre">Genre</label>:
 		<input type="text" name="genre" id="genre"><br>
 		<label for="tgl_rilis">Tanggal Rilis</label>:
 		<input type="text" name="tgl_rilis" id="tgl_rilis"><br>
 		<label for="kel_usia">Kelompok Usia</label>:
 		<input type="text" name="kel_usia" id="kel_usia"><br><br>
 		<button type="submit" name="submit" id="submit">Tambah Data</button>
 		<button><a href="admin/index.php">Kembali</a></button>
 	</form>
 	</div>
 </body>
 </html>
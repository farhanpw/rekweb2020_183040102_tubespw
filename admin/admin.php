<?php 
	if( isset($_POST["submit"]) ) {
		if( $_POST["username"] == "admin" && $_POST["password"] == "admin" ) {
			header("Location: index.php");
			exit;
		} else {
			$error = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
	<style>
		h1 {
			text-align: center;
			font-family: 'Courgette', cursive;
			color: #33ccff;
		}

		p {
			color: red;
			font-style: italic;
			text-align: center;
		}

		label, button {
			font-family: 'Archivo', sans-serif;
		}

		label {
			color: black
		}

		.container {
			border-radius: 50%;
			background-color: #ffff99;
			width: 290px;
			margin: auto;
			padding: 20px;
		}

		label {
		  display: inline-block;
		  width: 140px;
		}

		body {
			background-image: url(../assets/img/bg.png);
		}

		.adminimg {
			border-radius: 75%;
			width: 100px;
			position: relative;
			left: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login Admin</h1>

		<img src="../assets/img/adm.png" class="adminimg">

		<?php if( isset($error) ) : ?>
			<p>Username = admin, Password = admin</p>
		<?php endif; ?>
		
		<form action="" method="post" align="center">
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<br>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				<br><br>
				<button type="submit" name="submit">Login</button>
		</form>
	</div>
</body>
</html>
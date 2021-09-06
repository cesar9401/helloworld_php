<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile</title>

	<style>
		body {
			background-color: #0f4c75;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		$nombre = $_POST['usuario'];
		echo '<h1> Bienvenido ' . $nombre . '</h1>'
	?>

	<a href="index.html">Regresar</a>
</body>
</html>
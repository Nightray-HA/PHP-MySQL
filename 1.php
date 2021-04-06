<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
	<?php
	//koneksi ke MySQL
		$conn = mysqli_connect("localhost","root","","mysql");
	//cek koneksi
		if (mysqli_connect_error()) {
			echo "Failed to connect to MySQL ".mysqli_connect_error(); //eror
			exit();
			} else {
			echo "Sudah Connect"; //sukses
			}
	?>
</body>
</html>
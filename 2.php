<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	//koneksi ke MySQL
	$conn = mysqli_connect($servername,$username,$password);
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
	//membuat database
	$sql = "CREATE DATABASE myDB";
	//cek berhasil / gagal buat database
	if (mysqli_query($conn, $sql)) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: ".mysqli_error($conn);
	}
	mysqli_close($conn); //mennutup koneksi
?>
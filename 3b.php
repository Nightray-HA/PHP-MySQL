<?php
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";
	//konek ke database myDB
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
	// mengisi data ke dalam tabel satu persatu
	$sql = "INSERT INTO liga (kode,negara,champion)
	VALUES ('Jer','Jerman','4')";
	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully"."<br>";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn)."<br>";
	}
	//data ke-2
	$sql = "INSERT INTO liga (kode,negara,champion)
	VALUES ('Spa','Spanyol','3')";
	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully"."<br>";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn)."<br>";
	}
	//data ke-3
	$sql = "INSERT INTO liga (kode,negara,champion)
	VALUES ('Eng','English','3')";
	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully"."<br>";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn)."<br>";
	}
	mysqli_close($conn);
?>
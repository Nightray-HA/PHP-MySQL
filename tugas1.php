<html>
<head>
	<title>Membuat Database Tamu</title>
</head>
<body>
	<?php
		//konek ke MySQL
		$conn = mysqli_connect("localhost","root","","mysql");
		//cek koneksi
		if (mysqli_connect_error()) {
			echo "Failed to connect to MySQL ".mysqli_connect_error();
			exit();
		} else {
			echo "Sudah Connect ke MySQL"."<br>";
		}
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";
		//konek ke database myDB
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		//cek koneksi
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error()."<br>");
		}else{
			echo "Sudah Connect ke Database".$dbname."<br>";
		}
	//script create table
	$sql = "CREATE TABLE buku_tamu (
		ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		NAMA VARCHAR(200) NOT NULL,
		EMAIL VARCHAR(50) NOT NULL,
		ISI TEXT)";
		//cek berhasil / gagal buat tabel
		if (mysqli_query($conn, $sql)) {
			echo "Tabel buku_tamu berhasil dibuat";
		} else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
		}
		echo "<br>";
		//script insert data
		$sql = "INSERT INTO buku_tamu(ID_BT,NAMA,EMAIL,ISI) VALUES('1','Hilal Abdullah','hilal.spentisa99@gmail.com','Tamu Undangan')";
		//cek berhasil / gagal insert data ke tabel
		if (mysqli_query($conn, $sql)) {
			echo "Data berhasil dimasukkan";
		} else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
		}	
		mysqli_close($conn);
	?>
</body>
</html>
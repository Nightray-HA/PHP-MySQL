<html>
<head>
	<title>Create DB</title>
</head>
<body>
	<h1>Create DB Pegawai</h1>
	<?php 
		//konek ke MySQL
		$conn = mysqli_connect("localhost","root","","mysql");	
		//cek koneksi ke MySQL
		if (mysqli_connect_error()) {
			echo "Failed to connect to MySQL ".mysqli_connect_error();
			exit();
		} else {
			echo "Sudah Connect ke MySQL"."<br>";
		}
		//membuat database
		$sql = "CREATE DATABASE pegawai";
		//cek berhasil / gagal buat database
		if (mysqli_query($conn, $sql)) {
			echo "Berhasil membuat database pegawai"."<br>";
		} else {
			echo "Error creating database: ".mysqli_error($conn);
		}
		mysqli_close($conn);
		//konek ke database pegawai
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawai";
		//konek ke database
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Sudah Connect ke Database ".$dbname."<br>";
		}
		//membuat tabel relasi
		$sql="CREATE TABLE BIDANG_KERJA(
   			KODE_BIDANG varchar(5) not null  comment '',
   			NAMA_BIDANG varchar(50)  comment '',
   			primary key (KODE_BIDANG))";
   		mysqli_query($conn,$sql);
		$sql="CREATE TABLE PEGAWAI(
   			KODE_PEGAWAI varchar(5) not null  comment '',
   			KODE_BIDANG  varchar(5)  comment '',
   			NAMA_PEGAWAI varchar(50)  comment '',
   			ALAMAT_PEGAWAI varchar(50)  comment '',
   			primary key (KODE_PEGAWAI))";
   		mysqli_query($conn,$sql);
		//alter tabel pegawai
		$sql="ALTER TABLE PEGAWAI ADD constraint FK_PEGAWAI_BEKERJA_BIDANG_K foreign key (KODE_BIDANG)
        references BIDANG_KERJA (KODE_BIDANG) on delete restrict on update restrict";
		//cek berhasil / gagal relasi tabel
		if (mysqli_query($conn, $sql)) {
			echo "pembuatan tabel relasi berhasil"."<br>";
		} else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
		}
	?>
</body>
</html>
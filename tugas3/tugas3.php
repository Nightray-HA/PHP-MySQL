<html>
<head>
	<title>MANIPULASI DATA</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<!--menampilkan tulisan dengan format heading 1 dan 3-->
	<h1 >DATABASE PEGAWAI</h1>
	<table border="1">
		<tr>
			<td>Kode Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Bidang Kerja</td>
		</tr>

	<?php
	//menampilkan data
		$sql="SELECT * FROM pegawai";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['KODE_PEGAWAI']."</td>";
				echo "<td>".$tampil['NAMA_PEGAWAI']."</td>";
				echo "<td>".$tampil['ALAMAT_PEGAWAI']."</td>";
				echo "<td>".$tampil['KODE_BIDANG']."</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "</tr>";
	}
	mysqli_close($conn);
	?>
	</table>
	<br>
	<table>
		<tr>
			<td><a href="insert.php"><input type="button" value="Tambah Data"></a></td>
			<td><a href="update.php"><input type="button" value="Ubah Data"></a></td>
			<td><a href="delete.php"><input type="button" value="Hapus Data"></a></td>
		</tr>
	</table>
</body>
</html>
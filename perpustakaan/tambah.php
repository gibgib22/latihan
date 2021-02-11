<?php 

	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	
	if (isset($_POST["submit"])) {

		$nis = $_POST["$nis"];
		$nama = $_POST["$nama"];
		$kelas = $_POST["$kelas"];
		$email = $_POST["$email"];
		$jurusan = $_POST["$jurusan"];

		$query = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('', '$nis', '$nama', '$kelas', '$email', '$jurusan')");
		$siswa = mysqli_query($koneksi,$query);
		// var_dump($tambah);
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<center>
	<body>
		<table>
			<tr>
				<td>
					||<a href="index.php">Siswa</a>||
					<a href="daftarbuku.php">Buku</a>||
					<a href="home.php">Home</a>||
					<a href="tambahpeminjaman.php">Pinjam</a>||
				</td>
			</tr>
		</table>
		<h1>From Tambah Data</h1>
		<table>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="TambahData!" name="submit"></td>
			</tr>
		</table>
	</body>
</center>
</html>
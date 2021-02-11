
<?php 
	$koneksi = mysqli_connect("localhost" , "root" , "" , "perpustakaan2");
	$query = mysqli_query($koneksi, "SELECT * FROM siswa");

	if (isset($_POST ["submit"])) {
		$judul = $_POST["judul"];
		$pengarang = $_POST["pengarang"];
		$kategori = $_POST["kategori"];
		

		$query = mysqli_query($koneksi, "INSERT INTO buku VALUES ('', '$judul', '$pengarang', '$kategori')");
		$buku = mysqli_query($koneksi,$query);

		if($buku>0){
			echo "
				<script>
				alert('Data Berhasil ditambahkan');
				document.location.href ='daftarbuku.php';

				</script>
			";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah buku</title>
</head>
<center>
	<body>
		<h1>FROM DATA TAMBAH BUKU</h1>
		<form action="" method="post">
		<table>
			<tr>
				<td>
					||<a href="index.php">Siswa</a>||
					<a href="daftarbuku.php">Buku</a>||
					<a href="home.php">Home</a>||
					<a href="tambahpeminjaman.php">Pinjam</a>||
					<a href="peminjaman.php">peminjaman</a>||
				</td>
		</table>
		<table>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Tambah Data!" name="submit"></td>
			</tr>
		</table>
	</body>
</center>
</html>
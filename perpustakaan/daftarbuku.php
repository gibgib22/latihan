<?php 
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	$query = mysqli_query($koneksi, "SELECT * FROM buku ");

	// var_dump($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

	<title>Daftar Buku</title>
</head>
<center>
	<body>
		<h1>DAFTAR BUKU PERPUSTAKAAN</h1>
		<table>
			<tr>
				<td>
					||<a href="index.php">Siswa</a>||
					<a href="daftarbuku.php">Buku</a>||
					<a href="home.php">Home</a>||
					<a href="tambahpeminjaman.php">Pinjam</a>||
				</td>
			</tr><br><br>
		</table>
		<table id="customers" table border="1" style="border-collapse: collapse;">
			<tr>
				<th>ID</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Kategori</th>
				<th>Aksi</th>
			</tr>
			<?php $i =1; ?>
			<?php while ($siswa = mysqli_fetch_assoc($query)): ?>
			<tr>
				<td><?php echo $siswa["id"]; ?></td>
				<td><?php echo $siswa["judul"]; ?></td>
				<td><?php echo $siswa["pengarang"]; ?></td>
				<td><?php echo $siswa["kategori"]; ?></td>
				<td>
			 		<a href="editbuku.php?id=<?php echo $siswa['id']; ?>">ubah</a>|
					<a href="hapusbuku.php?id=<?php echo $siswa['id']; ?>">hapus</a> 
				</td>
			</tr>
			<?php $i++; ?>
			<?php endwhile; ?>
		</table><br><br>
		<a href="tambahbuku.php">+tambahbuku</a>
	</body>
</center>
</html>
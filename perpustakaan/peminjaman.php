<?php 
	$koneksi = mysqli_connect("localhost", "root", "" , "perpustakaan2");
	$query = mysqli_query($koneksi, "SELECT * FROM peminjaman");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>peminjaman</title>
</head>
<center>
	<body>
		<h1>TABEL PEMINJAMAN</h1>
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
		<table>
			<tr>
				<td>
					||<a href="index.php">Siswa</a>||
					<a href="daftarbuku.php">Buku</a>||
					<a href="home.php">Home</a>||
					<a href="tambahpeminjaman.php">Pinjam</a>||
					<a href="peminjaman.php">peminjaman</a>||
				</td>
			</tr>
		</table>
		<table id="customers" table border="1" style="border-collapse: collapse;">
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Judul</th>
				<th>Tanggal pinjam</th>
				<th>Tanggal kembali</th>
				<th>Aksi</th>
			</tr>
			<?php $i=1; ?>
			<?php while ($pinjam = mysqli_fetch_assoc($query)): ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $pinjam["nama"]; ?></td>
				<td><?php echo $pinjam["judul"]; ?></td>
				<td><?php echo $pinjam["tgl_pinjam"]; ?></td>
				<td><?php echo $pinjam["tgl_kembali"] ?></td>
				<td>
			 		<a href="editpeminjaman.php?id=<?php echo $pinjam['id']; ?>">ubah</a>|
					<a href="hapuspeminjaman.php?id=<?php echo $pinjam['id']; ?>">hapus</a> 
				</td>
			</tr>
			<?php $i++; ?>
		<?php endwhile; ?>
		</table>
	</body>
</center>
</html>
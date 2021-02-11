<?php
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	$query = mysqli_query($koneksi, "SELECT * FROM siswa ");

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

	<title></title>
</head>	
<center>
	<body>

		 <h1>Data Siswa</h1>

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
		 <table id="customers" table border = "1" style="border-collapse: collapse;">
			 <tr>
			 	<th>ID</th>
			 	<th>Aksi</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
		<?php $i =1; ?>
		<?php while ($siswa = mysqli_fetch_assoc($query)): ?>
		<tr>
			 	<td><?php echo $i; ?></td>
			 	<td>
			 		<a href="editsiswa.php?id=<?php echo $siswa['id']; ?>">ubah</a>|
					<a href="hapussiswa.php?id=<?php echo $siswa['id']; ?>">hapus</a> 
				</td>
			 	</td>
				<td><?php echo $siswa["nis"]; ?></td>
				<td><?php echo $siswa["nama"]; ?></td>
				<td><?php echo $siswa["kelas"]; ?></td>
				<td><?php echo $siswa["email"]; ?></td>
				<td><?php echo $siswa["jurusan"]; ?></td>
			</tr>
		
		<?php 
			$i++; 
		?>

		<?php
			endwhile;
		?>
		</table>

		 <a href="tambah_siswa.php">+Tambah Data</a><br><br>

	</body>
</center>
</html>
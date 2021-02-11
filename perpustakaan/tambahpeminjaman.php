<?php
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");

	$query = mysqli_query($koneksi, "SELECT * FROM siswa");
	$query2 = mysqli_query($koneksi, "SELECT * FROM buku");

	// $siswa = mysqli_fetch_assoc($query);
	// var_dump($siswa);
	if (isset($_POST["submit"])) {

		$nama = $_POST["nama"];
		$judul = $_POST["judul"];
		$tanggal = $_POST["tgl_pinjam"];

		$tanggalsekarang = strtotime($tanggal);
		$jumlahhari = 86400*3;
		$hasiljumlah = $tanggalsekarang + $jumlahhari;

		$tanggalkembali = date("Y-m-d", $hasiljumlah);

		$query3 = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES ('', '$nama' , '$judul' , '$tanggal' , '$tanggalkembali')");

		// var_dump($query3);

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah peminjaman</title>
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
					<a href="peminjaman.php">peminjaman</a>||
				</td>
			</tr>
		</table>
		<h1>Form Tambah Data Daftar Peminjaman</h1>
		<form action="" method="post">
		<table>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<select style="width: 100%" name="nama">
						<option value="">-- PILIH --</option>
						<?php $i=1; ?>
						<?php while ($siswa = mysqli_fetch_assoc($query)):?>			
						<option>
								<?php echo $siswa["nama"];?>
						</option>
						<?php $i++; ?>
						<?php endwhile; ?>
					</select>
				</td>  
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td>
					<select style="width: 100%" name="judul">
						<option value="">-- PILIH --</option>
						<?php $a=1; ?>
						<?php while($siswa2 = mysqli_fetch_assoc($query2)): ?>
						<option>
							<?php echo $siswa2["judul"]; ?>
						</option>
						<?php $a++; ?>
						<?php endwhile; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal peminjaman</td>
				<td>:</td>
				<td><input style="width: 100%" type="date" name="tgl_pinjam" value="<?php echo(date('y-m-d')); ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Tambah Data!" name="submit"></td>
			</tr>
		</table>
		</form>
	</body>
</center>
</html>
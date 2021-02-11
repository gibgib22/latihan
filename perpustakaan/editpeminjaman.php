<?php
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM siswa");
	$query2 = mysqli_query($koneksi, "SELECT * FROM buku");
	$sql = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id=$id");

	if (isset($_POST["submit"])) {
		$nama 		= $_POST["nama"];
		$judul		= $_POST["judul"];
		$tanggal 	= $_POST["tgl_pinjam"];

	$ass = "UPDATE peminjaman SET nama='$nama', judul='$judul', tgl_pinjam='$tgl_pinjam' WHERE id='$id'";
		$tanggalsekarang = strtotime($tanggal);
		$jumlahhari = 86400*3;
		$hasiljumlah = $tanggalsekarang + $jumlahhari;

		$tanggalkembali = date("Y-m-d", $hasiljumlah);
		$res = mysqli_query($koneksi,$ass);
		var_dump($ass);
		$count = mysqli_affected_rows($koneksi);
		if($count>0){
			echo "
				<script>
				alert('Data Berhasil Di edit !!!');
				document.location.href='peminjaman.php';
				</script>
			";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit peminjaman</title>
</head>
<center>
	<body>
		<h1>Form edit Data Daftar Peminjaman</h1>
		<form action="" method="post">
		<table>
			<?php 
				while($peminjaman = mysqli_fetch_assoc($sql)):
					//menggunakan titik dua
			?>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<select style="width: 100%" name="nama" >
						<option value="<?php echo $peminjaman['nama'];?>"></option>
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
				<td><input type="submit" value="edit Data!" name="submit"></td>
			</tr>
		</table>
		</form>
	</body>
</center>
</html>
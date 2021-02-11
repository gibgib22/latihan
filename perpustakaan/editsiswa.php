<?php
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
	if(isset($_POST['submit'])){
	$nama 		 = $_POST['nama'];
	$nis 		 = $_POST['nis'];
	$Kelas 		 = $_POST['kelas'];
	$jurusan 	 = $_POST['jurusan'];
	$email 	 	= $_POST['email'];

	$ass = "UPDATE siswa SET nama='$nama', nis='$nis', kelas='$kelas', jurusan='$jurusan', email='$email' WHERE id='$id'";
	$res = mysqli_query($koneksi,$ass);
	var_dump($ass);
	$count = mysqli_affected_rows($koneksi);
	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di edit !!!');
			document.location.href='index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit data</title>
</head>
<body>
	<center>
	<h1>form edit data</h1>
	<form action="" method="post">
		<table >
			<?php
				while($siswa = mysqli_fetch_assoc($sql)):
					//memakai titik dua jangan ttik koma
			?>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $siswa['nis']; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $siswa['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" value="<?php echo $siswa['kelas']; ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $siswa['email']; ?>"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jurusan" value="<?php echo $siswa['jurusan']; ?>"></td>
			</tr>
			<?php 
				endwhile;
				//memakai titik koma
			?>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="editdata!" name="submit"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
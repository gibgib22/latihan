<?php
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id=$id");

	if (isset($_POST ["submit"])) {
		$judul 		= $_POST["judul"];
		$pengarang 	= $_POST["pengarang"];
		$kategori	= $_POST["kategori"];

	$ass = "UPDATE buku SET judul='$judul', pengarang='$pengarang', kategori='$kategori' WHERE id='$id'";
	$res = mysqli_query($koneksi,$ass);
	var_dump($ass);
	$count = mysqli_affected_rows($koneksi);
	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di edit !!!');
			document.location.href='daftarbuku.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit buku</title>
</head>
<center>
	<body>
		<h1>FROM DATA edit BUKU</h1>
		<form action="" method="post">
		<table>
			<?php 
				while($buku = mysqli_fetch_assoc($sql)):
				//menggunakan titik dua jangan koma
			?>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" value="<?php echo $buku['judul'];?>"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td><input type="text" name="pengarang" value="<?php echo $buku['pengarang'];?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" value="<?php echo $buku['kategori'];?>"></td>
			</tr>
			<?php
		endwhile;
			?>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="edit Data!" name="submit"></td>
			</tr>
		</table>
	</body>
</center>
</html>
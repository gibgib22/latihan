<?php
	$koneksi = mysqli_connect("localhost","root","","perpustakaan2");
	$id= $_GET['id'];
	$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE id=$id");

	// var_dump($query);
	if($query>0){
		echo "
		<script>
		alert('data berhasil di hapus');
		dokument.location.href = 'index.php';
		</script>
		";
	}
?>


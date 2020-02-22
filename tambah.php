<?php
require 'functions.php';
if(isset($_POST["submit"])) {
	if(tambah($_POST) > 0) {
		echo "<script>
			alert('data berhasil ditambah');
			document.location.href='lihat.php';
		</script>";
	}else {
		echo "<script>
			alert('data gagal ditambah');
			document.location.href='lihat.php';
		</script>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Profil</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Nama :</label>
				<input type="text" name="name" id="name" required="">
			</li>
			<li>
				<label for="born_date">Tanggal Lahir :</label>
				<input type="text" name="born_date" id="born_date" required="">
			</li>
			<li>
				<label for="address">Alamat :</label>
				<input type="text" name="address" id="address" required="">
			</li>
			<li>
				<label for="hobby_id">Hobby Id :</label>
				<input type="text" name="hobby_id" id="hobby_id" required="">			
			</li>
			<li>
				<label for="photo">Gambar :</label>
				<input type="text" name="photo" id="photo" required="">
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
	</form>
</body>
</html>
<?php
require 'functions.php';
if(isset($_POST["submit"])) {
	if(tambah_hobi($_POST) > 0) {
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
	<title>Tambah Data Hobi</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Nama Hobi:</label>
				<input type="text" name="name" id="name" required="">
			</li>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
	</form>
</body>
</html>
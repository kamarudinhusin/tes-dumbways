<?php
	require 'functions.php';
	//ambil data
	$ambil = mysqli_query($koneksi,"SELECT * FROM hobby_tb");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data</title>
</head>
<body>
	<h1>Data</h1>
	<a href="tambah.php">Tambah Data Profil</a><br><br>
	<a href="tambah_hobi.php">Tambah Data Hobi</a><br><br>
	<a href="lihat.php">Lihat Data Profil</a><br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama Hobi</th>
		</tr>

		<?php $i=1; ?>
		<?php while ($row = mysqli_fetch_assoc($ambil)) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="ubah.php">Ubah</a> | <a href="hapus_hobi.php?id=<?php echo $row["id"]; ?>">Hapus</a>
			</td>
			<td><?php echo $row["name"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
	</table>
</body>
</html>
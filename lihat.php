<?php
	require 'functions.php';
	//ambil data
	$ambil = mysqli_query($koneksi,"SELECT * FROM profile_tb");
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
	<a href="lihat_hobi.php">Lihat Data Hobi</a><br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
		</tr>

		<?php $i=1; ?>
		<?php while ($row = mysqli_fetch_assoc($ambil)) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="ubah.php">Ubah</a> | <a href="hapus.php?id=<?php echo $row["id"]; ?>">Hapus</a>
			</td>
			<td><img src="img/<?php echo $row["photo"]; ?>" width="50"></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["born_date"]; ?></td>
			<td><?php echo $row["address"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
	</table>
</body>
</html>
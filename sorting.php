<!DOCTYPE html>
<html>
<head>
	<title>Program Sorting</title>
	<style type="text/css">
		body {
			font-family: sans-serif;
		}
		h1 {
			text-align: center;
			margin-bottom: 100px;
		}
		.box {
			width: 600px;
			margin: 10px auto;
			text-align: center;
		}
		.hasil {
			background-color: blue;
			color: #fff;
			padding: 10px 0px;
		}
		input[type='text'] {
			width: 40px;
		}
	</style>
</head>
<body>
	<div class="box">
		<center><h3>MASUKKAN ANGKA YANG AKAN DIURUTKAN</h3></center>
		<form action="" method="post">
			<input type="text" name="satu">
			<input type="text" name="dua">
			<input type="text" name="tiga">
			<input type="text" name="empat">
			<input type="submit" name="submit" value="URUTKAN">
		</form>

		<?php
		if (isset($_POST['submit'])) {
			$satu = $_POST['satu'];
			$dua = $_POST['dua'];
			$tiga = $_POST['tiga'];
			$empat = $_POST['empat'];

			$angka = array($satu,$dua,$tiga,$empat);

			sort($angka);
			echo "</br>";
			echo "<div class='hasil'>HASIL :";

			$jumlah=count($angka);
			for ($x=0; $x < $jumlah ; $x++) { 
				echo "$angka[$x]";
				echo " ";
			}
			echo "</div>";
		}
		?>
	</div>
</body>
</html>
<?php
$koneksi = mysqli_connect("localhost","root","","tes_dumbways");


function tambah($data) {
	global $koneksi;

	$name = $_POST["name"];
	$born = $_POST["born_date"];
	$address = $_POST["address"];
	$hobby = $_POST["hobby_id"];
	$gambar = $_POST["photo"];

	$query = "INSERT INTO profile_tb VALUES ('','$name','$born','$address','$hobby', $gambar')";
	mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
}

function tambah_hobi($data) {
	global $koneksi;

	$name = $_POST["name"];

	$tambah = "INSERT INTO hobby_tb VALUES ('', '$name')";
	mysqli_query($koneksi,$tambah); 
	return mysqli_affected_rows($koneksi);
}

function hapus($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM profile_tb WHERE id=$id");
	return mysqli_affected_rows($koneksi);
}

function hapus_hobi($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM hobby_tb WHERE id=$id");
	return mysqli_affected_rows($koneksi);
}
?>
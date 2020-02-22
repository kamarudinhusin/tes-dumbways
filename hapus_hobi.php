<?php
require 'functions.php';
$id = $_GET["id"];

if(hapus_hobi($id)>0){
	echo "<script>
			alert('data berhasil dihapus');
			document.location.href='lihat_hobi.php';
		</script>";
} else {
	echo "<script>
			alert('data gagal dihapus');
			document.location.href='lihat_hobi.php';
		</script>";
}
?>
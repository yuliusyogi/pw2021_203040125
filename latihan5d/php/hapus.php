<?php
/*
    Yulius Yogi Yuwono
    203040125
    Jumat,13.00
*/
?>

<?php

require 'functions.php';
$id = $_GET['id'];
if (hapus($id) > 0) {
	echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href = 'admin.php';
			</script>
		";
} else {
	echo "
			<script>
				alert('data gagal dihapus!');
				document.location.href = 'admin.php';
			</script>
		";
}
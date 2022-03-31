<?php 

require 'functioncrud.php';

$id = $_GET["id"];

if(hapus($id) >0 ){
	echo "
				<script>
					alert('data berhasil dihapus!');
					document.location.href = 'indexcrud.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal dihapus!');
					document.location.href = 'indexcrud.php';
				</script>
		";
	}


 ?>
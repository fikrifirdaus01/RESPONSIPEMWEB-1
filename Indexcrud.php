<?php 

require 'functioncrud.php';

$pesanan = query("SELECT * FROM pesanan");

// jika tombol cari ditekan
if( isset( $_POST["cari"]) ){
	$pesanan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking Kursus Mengemudi</title>

</head>
<body style="background-color: aqua; font-family: 'Lucida Grande';">
	<h1>Daftar Peserta Kursus Mengemudi</h1>
	<div class="p_content">
		<p>AYO!!!</p>
		<p>Segera daftarkan dirimu sekarang juga untuk menjadi bagian dari TOP PASS Driving School dan menjadi pengemudi yang mahir</p>
	</div>

	<div class="booking">
		<p>Anda Tertarik?</br>Booking sekarang juga</p>
		<a class="tambah" href="tambah.php">Booking!!!</a>
	<div>

	<div style="padding: 50px 0 100px 0;">
		<form align="center" action="" method="post">
			<input style="font-family: Lucida Grande;" type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
			<button style="font-family: Lucida Grande; background-color:lightblue" type="submit" name="cari">Cari!</button>
		</form>
	<div>
	
	<fieldset style="padding: 25px 0 25px 0;">
		<legend><p><i><b>Berikut data-data kursus mengemudi yang tersedia.</p></i></b></legend>
		<table align="center" border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Ubah</th>
				<th>Hapus</th>
				<th>Nama Pelanggan</th>
				<th>Mobil</th>
				<th>Nama Instruktur</th>
				<th>Paket</th>
				<th>Tanggal</th>
			</tr>

		<?php $i=1; ?>
		<?php foreach ($pesanan as $row) : ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah Data?</a></td>
				<td><a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus Data?</a></td>
				<td><?php echo $row["pelanggan"]; ?></td>
				<td><?php echo $row["mobil"]; ?></td>
				<td><?php echo $row["instruktur"]; ?></td>
				<td><?php echo $row["paket"]; ?></td>
				<td><?php echo $row["tanggal"]; ?></td>
			</tr>

		<?php $i++; ?>
		<?php endforeach; ?>
		</table>
	</fieldset>

<p style="padding: 50px 0 25px 0;"><a href="Home.html" ><button  class="backhome">Kembali ke Halaman Utama</button></a></p>	

<style>
	h1{
        color:darkblue;
		text-align: center;
		padding: 25px 0 25px 0;
	}
	.p_content{
		text-align: center;
		color:black ;
		padding: 25px 0 25px 0;
	}
	.booking{
		text-align: center;
		color:blue ;
	}
	.tambah{
		text-align: center;
		color:red;
	}
	legend{
		text-align: center;
		color:darkblue;
	}
	th{
		background-color: darkblue;
		text-align: center;
		color:lightcyan;
	}
	td{
		background-color:darkgray;
		text-align: center;
		color:black;
	}
	.backhome{
		font-family: 'Lucida Grande'; 
		background-color:aquamarine;
		border-radius: 15%;
	}
</style>
</body>
</html>
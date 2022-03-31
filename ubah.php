<?php 

require 'functioncrud.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan ID
$plg = query("SELECT * FROM pesanan WHERE id = $id")[0];

// cek tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST)>0){
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'indexcrud.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'indexcrud.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
	<style>
		fieldset{
            border: 1px solid #DDDDDD;
            font-size: 14px;
            font-family: Arial, Helvetica;
            padding: 1em 2em;
		}
        legend {
            background: #BFD48C;
            color: #FFFFFF;
            margin-bottom: 10px;
            padding: 0.5em 1em;
        }
    </style>
</head>
<body>
	<h1 align="center">Ubah Data Mahasiswa</h1>
	<p align="center"><i>Silahkan ubah pesanan sesuai keinginan.</i></p>
	<p align="center"><a href="indexcrud.php">Kembali ke Halaman Data Booking</a>
	<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $plg["id"]; ?>">
	<fieldset>
		<legend align="center"><i><b>Data Booking yang ingin diedit</b></i></legend>
		<table align="center" border="0" cellpadding="5" cellspacing="2">
		<tr>
			<td>Nama Pelanggan</td>
			<td><input type="text" name="pelanggan" id="pelanggan" required value="<?php echo $plg["pelanggan"]; ?>"></td>
		</tr>
		<tr>
			<td>Mobil</td>
			<td><select class="" name="mobil">
				    <option value="Pilih Mobil"> Pilih Mobil</option>
					<option value="Toyota Rush G"> Toyota Rush G</option>
					<option value="Honda HR-V 1.5L S M/T"> Honda HR-V 1.5L S M/T</option>
					<option value="Toyota Fortuner 2.4 G 4X2 M/T DSL"> Toyota Fortuner 2.4 G 4X2 M/T DSL</option>
					<option value="KIJANG INNOVA 2.0 G M/T BSN LUX"> KIJANG INNOVA 2.0 G M/T BSN LUX</option>
					<option value="ALL NEW VELOZ 1.5 M/T"> ALL NEW VELOZ 1.5 M/T</option>
					<option value="Suzuki Ertiga GA MT"> Suzuki Ertiga GA MT</option>
					<option value="Honda BR-V E CVT">Honda BR-V E CVT </option>
					<option value="Mitsubishi Xpander Cross MT">Mitsubishi Xpander Cross MT </option>
					<option value="Suzuki XL7 Beta AT">Suzuki XL7 Beta AT </option>
			</select></td>
		</tr>
		<tr>
			<td>Instruktur</td>
			<td><select class="" name="instruktur">
				    <option value="Pilih Instruktur"> Pilih Instruktur </option>
					<option value="Instruktur Budi">Instruktur Budi </option>
					<option value="Instruktur Tono Setiawan">Instruktur Tono Setiawan</option>
					<option value="Instruktur Andre Martin">Instruktur Andre Martin </option>
			</select></td>
			</tr>
			<tr>
				<td>Paket</td>
				<td><select class="" name="paket">
				    <option value="Pilih Paket"> Pilih Paket</option>
					<option value="Paket 1"> Paket 1</option>
					<option value="Paket 2"> Paket 2</option>
					<option value="Paket 3"> Paket 3</option>
				</select></td>
			</tr>
			<tr>
			<td>Tanggal</td>
				<td><input type="date" name="tanggal" id="tanggal" required value="<?php echo $plg["tanggal"];?>"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit">Ubah Data!</button></td>
			</tr>
	</form>
	</fieldset>
</body>>
</html>
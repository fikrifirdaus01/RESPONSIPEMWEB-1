<?php 

 $db = mysqli_connect("localhost", "root", "", "pesanan");


function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data){
	global $db;
	// ambil data dari tiap elemen dalam form
	$pelanggan = htmlspecialchars($data["pelanggan"]);
	$mobil = htmlspecialchars($data["mobil"]);
	$instruktur = htmlspecialchars($data["instruktur"]);
	$paket = htmlspecialchars($data["paket"]);
	$tanggal = htmlspecialchars($data["tanggal"]);

	$query = "INSERT INTO pesanan
				VALUES
				('', '$pelanggan', '$mobil', '$instruktur', '$paket', '$tanggal')
				";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM pesanan where id = $id");
	return mysqli_affected_rows($db);
}

function ubah($data){
	global $db;
	$id = $data["id"];
	// ambil data dari tiap elemen dalam form
	$pelanggan = htmlspecialchars($data["pelanggan"]);
	$mobil = htmlspecialchars($data["mobil"]);
	$instruktur = htmlspecialchars($data["instruktur"]);
	$paket = htmlspecialchars($data["paket"]);
	$tanggal = htmlspecialchars($data["tanggal"]);

	$query = "UPDATE pesanan SET 
				pelanggan = '$pelanggan', 
				mobil ='$mobil',
				instruktur = '$instruktur',
				paket = '$paket',
				tanggal = '$tanggal'
				WHERE id = $id
			";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function cari($keyword){
	$query = "SELECT * FROM pesanan 
				WHERE
				pelanggan LIKE '%$keyword%' OR
				mobil LIKE '%$keyword%' OR
				paket LIKE '%$keyword%' 
				";

	return query($query);

}
 ?>
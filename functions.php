<?php 
function koneksi() {
	$conn = mysqli_connect("localhost", "root", "") or die("Koneksi Gagal!");
	mysqli_select_db($conn, "pw_183040102") or die("DB Salah!");

	return $conn;
}


function query($query) {
	$conn = koneksi();
	$results = mysqli_query($conn, "$query");

	$rows = [];
	while( $row = mysqli_fetch_assoc($results)) {
		$rows[] = $row;
	};
	return $rows;
}


function tambah($data) {
	$conn = koneksi();

	$judul = htmlspecialchars($data['judul']);
	$gambar = htmlspecialchars($data['gambar']);
	$genre = htmlspecialchars($data['genre']);
	$tgl_rilis = htmlspecialchars($data['tgl_rilis']);
	$kel_usia = htmlspecialchars($data['kel_usia']);

	$query = "INSERT INTO film
				VALUES
			  (' ', '$judul', '$gambar', '$genre', '$tgl_rilis', '$kel_usia')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM film WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubah($data) {
	$conn = koneksi();

	$id = $data["id"];
	$id = htmlspecialchars($data["id"]);
	$judul = htmlspecialchars($data['judul']);
	$gambar = htmlspecialchars($data['gambar']);
	$genre = htmlspecialchars($data['genre']);
	$tgl_rilis = htmlspecialchars($data['tgl_rilis']);
	$kel_usia = htmlspecialchars($data['kel_usia']);

	$query = "UPDATE film SET
				judul = '$judul',
				gambar = '$gambar',
				genre = '$genre',
				tgl_rilis = '$tgl_rilis',
				kel_usia = '$kel_usia'
			  WHERE id = '$id'
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function cari($keyword){
	$query = "SELECT * FROM film WHERE
	judul LIKE '%$keyword%' OR
	gambar LIKE '%$keyword%' OR
	genre LIKE '%$keyword%' OR
	tgl_rilis LIKE '%$keyword%' OR
	kel_usia LIKE '%$keyword%' ";

	return query($query);
}

?>
<?php

include("config.php");

	
	// ambil data dari formulir
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$waktu = date("Y-m-d H:i:s");
	$penulis = ("Admin");
	$isi = $_POST['isi'];
	
	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	
	// buat query update
	$sql = "UPDATE berita SET judul='$judul', waktu='$waktu', penulis='$penulis', isi='$isi', gambar='$nama_file', ukuran='$ukuran_file', tipe='$tipe_file' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-berita.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
?>

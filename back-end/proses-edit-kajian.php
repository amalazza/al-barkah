<?php

include("config.php");

	
	// ambil data dari formulir
	$id = $_POST['id'];
	$tema_kajian = $_POST['tema_kajian'];
	$waktu = date("Y-m-d H:i:s");
	$ustadz = $_POST['ustadz'];
	
	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	
	// buat query update
	$sql = "UPDATE kajian SET tema_kajian='$tema_kajian', waktu='$waktu', ustadz='$ustadz', gambar='$nama_file', ukuran='$ukuran_file', tipe='$tipe_file' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-kajian.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
?>

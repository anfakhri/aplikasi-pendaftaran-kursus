<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$idtagih = $_POST['idtagihann'];
$idpeserta = $_POST['idpesertaa'];
$totalbayar = htmlspecialchars( $_POST['totalpembayar']);
//gambar bukti pembayaran
$buktibayar=$_FILES['fotoo']['name'];
$source=$_FILES['fotoo']['tmp_name'];
$folder='./asset/buktipembayaran/';
//
$tanggal = htmlspecialchars( $_POST['tanggal']);

// update data ke database
if ($buktibayar !=''){
	move_uploaded_file($source,$folder.$buktibayar);
	$update=mysqli_query($koneksi,"UPDATE tbl_pembayaran SET 
	id_peserta='$idpeserta', 
	total_bayar='$totalbayar',
	bukti_pembayaran='$buktibayar', 
	tanggal_bayar='$tanggal', 
	status_pembayaran='Terkonfirmasi' WHERE id_tagihan='$idtagih'");
	header("location:terkonfirmasi.php");
	}else{
		$update=mysqli_query($koneksi,"UPDATE tbl_pembayaran SET 
		id_peserta='$idpeserta', 
		total_bayar='$totalbayar', 
		tanggal_bayar='$tanggal', 
		status_pembayaran='Belum Terkonfirmasi' WHERE id_tagihan='$idtagih'");
		header("location:belumkonfirm.php");
	}

//mengatur file simpan

// mengalihkan halaman kembali ke index.php


?>

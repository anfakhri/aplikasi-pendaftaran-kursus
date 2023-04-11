<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['idkursuss'];
$kategori = $_POST['kategorii'];
$soft1 = htmlspecialchars( $_POST['softw1']);
$soft2 = htmlspecialchars( $_POST['softw2']);
$soft3 = htmlspecialchars( $_POST['softw3']);
$hargaa= htmlspecialchars( $_POST['hargapakeet']);

// update data ke database
mysqli_query($koneksi,"UPDATE tbl_kursus SET kategori='$kategori', software1='$soft1',software2='$soft2', software3='$soft3', harga='$hargaa' WHERE id_kursus='$id'");

// mengalihkan halaman kembali ke index.php
header("location:paketmin.php");

?>
<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['idpesertaa'];
$nama = $_POST['inputnamalengkap'];
$email = htmlspecialchars( $_POST['inputemail']);
$notel = htmlspecialchars( $_POST['inputnotelepon']);
$alamat = htmlspecialchars( $_POST['inputalamat']);

// update data ke database
mysqli_query($koneksi,"UPDATE tbl_peserta SET nama='$nama', email='$email',no_telepon='$notel', alamat='$alamat' WHERE id_peserta='$id'");

// mengalihkan halaman kembali ke index.php
header("location:peserta.php");

?>
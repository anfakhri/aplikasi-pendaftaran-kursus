<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['idjadwall'];
$hariii = htmlspecialchars( $_POST['harii']);
$waktuuu = htmlspecialchars( $_POST['waktuu']);
$pertemu= htmlspecialchars( $_POST['pertemuann']);
$x="x";
// update data ke database
mysqli_query($koneksi,"UPDATE tbl_jadwal SET hari='$hariii', waktu='$waktuuu',pertemuan='$pertemu$x' WHERE id_jadwal='$id'");

// mengalihkan halaman kembali ke index.php
header("location:jadwalmin.php");

?>
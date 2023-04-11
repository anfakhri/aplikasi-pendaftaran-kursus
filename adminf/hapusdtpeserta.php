


<?php
// koneksi database
include ('../koneksi.php');
//mengambil idpeserta
$id = $_GET['id_peserta'];
//menghapus data
$query = "DELETE FROM tbl_peserta WHERE id_peserta='$id'";
mysqli_query($koneksi, $query);
header('location:peserta.php');

?>
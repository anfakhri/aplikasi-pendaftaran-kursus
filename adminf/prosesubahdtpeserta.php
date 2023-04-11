<//?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$idpeserta = $_POST['id_peserta'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE tbl_peserta set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
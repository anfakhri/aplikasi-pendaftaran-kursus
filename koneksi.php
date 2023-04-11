<?php 
$host="localhost";
$user="root";
$password="";
$db="database_pendaftaran";

$koneksi = mysqli_connect($host,$user,$password,$db);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
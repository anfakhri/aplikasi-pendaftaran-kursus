<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_fetch_array($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	header("location:adminf/homeadmin.php");
}else{
    header("location:gagallogin.php?pesan=gagal");
}
?>
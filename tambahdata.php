<?php 
// koneksi database
include 'koneksi.php';
$query="SELECT max(id_tagihan) as maxcode from tbl_pembayaran";
 $hasil= mysqli_query($koneksi,$query);
 $data=mysqli_fetch_array($hasil);
 $maxcode=$data["maxcode"];
 $nourut=(int) substr($maxcode,2,3);
 $nourut++;
 $char="TG";
$kodetagihan=$char. sprintf("%03s",$nourut);
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}


// menangkap data yang di kirim dari form pendaftaran
//untuk table peserta
$tanggaldaftar=tgl_indo(date('Y-m-d'));
$idpeserta = $_POST['idpesertaa'];
$nama = htmlspecialchars( $_POST['inputnama']);
$email = htmlspecialchars( $_POST['inputemail']);
$notelp =htmlspecialchars( $_POST['inputnotelp']);
$jeniskelamin = htmlspecialchars( $_POST['jenis_kelamin']);
$alamat = htmlspecialchars( $_POST['inputalamat']);
$paketkursus= htmlspecialchars( $_POST['paketkursus']);

//untuk table pembayaran/tagihan
$idtagihann=$kodetagihan;
$totalbayar=0;
$status='Belum Terkonfirmasi';
if(substr($idpeserta,0,2)=="DG"){
    $kodekursus="KDG001";
}else if(substr($idpeserta,0,2)=="EV"){
    $kodekursus="KEV002";
}
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_peserta VALUES('$idpeserta','$nama','$email','$paketkursus','$notelp','$jeniskelamin','$alamat','$tanggaldaftar')");
mysqli_query($koneksi,"INSERT INTO tbl_pembayaran VALUES('$idtagihann','$idpeserta','$kodekursus','$totalbayar','','','$status')");
// mengalihkan halaman kembali ke notifdaftar.php
header("location:penggunauser/usenotifdaftar.php");

?>
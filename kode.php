<?php


include "koneksi.php";
// mencari kode barang dengan nilai paling besar
 $query="SELECT max(id_peserta) as maxcode from tbl_peserta";
 $hasil= mysqli_query($koneksi,$query);
 $data=mysqli_fetch_array($hasil);
 $maxcode=$data["maxcode"];
 $nourut=(int) substr($maxcode,2,3);
 $nourut++;
 $char="DG";
 $tanggal=date("d F Y");
$kodejadi=$char. sprintf("%03s",$nourut);
echo$kodejadi.('<br>').$tanggal;
?>
<h2>List Mahasiswa</h2>
<hr style='height:10px; border:4; box-shadow:10px 10px 10px #8c8c8c;'>
<table border="1">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th></th></tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($koneksi, "SELECT * from tbl_peserta");
    $no=1;
    foreach ($mahasiswa as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['id_peserta']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['j_kelamin']."</td>
            <td>".$row['email']."</td>
            <td><a href='loginadmin.php'><button style='color:aqua;'>Ubah</button></a> 
                <a href= ><button >Hapus</button></a>
                </td>
              </tr>";
              
        $no++;
            }
    ?>
</table>
<?php
    $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_pembayaran
    INNER JOIN tbl_peserta ON tbl_pembayaran.id_peserta=tbl_peserta.id_peserta
    INNER JOIN tbl_kursus ON tbl_pembayaran.id_kursus=tbl_kursus.id_kursus 
    WHERE status_pembayaran='Belum Terkonfirmasi'
    
     ");
  ?>

            <table class="table table-responsive-sm">
              <tr>
              <th>No</th>
                <th>ID Tagihan</th>
                <th>ID Peserta</th>
                <th>Nama</th>
                <th>Harga Kursus</th>
                <th>Total Bayar</th>
                <th>Bukti Pembayaran</th>
                <th>Tanggal Bayar</th>
                <th>Status Pembayaran</th>
                <th></th>
              </tr>
              <?php
              $no=1;
              while($row=mysqli_fetch_assoc($hasil)):
function rp($angka){
  if(is_numeric($angka)){
    $formatangka= number_format($angka,'0',',','.');
    return $formatangka;}
}
              ?>
              <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $row["id_tagihan"]; ?></td>
                <td><?php echo $row["id_peserta"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo rp($row["harga"]); ?> </td>
                <td><?php echo $row["total_bayar"]; ?> </td>
                <td><?php echo $row["bukti_pembayaran"]; ?> </td>
                <td><?php echo $row["tanggal_bayar"]; ?></td>
                <td><?php echo $row["status_pembayaran"]; ?></td>
                <td><a href="ubahdtpeserta.php" title="Ubah Data"><button class="btn-primary btn-user ;" style="width:-webkit-fill-available;">Ubah</button></a> 
                <a href="" title="Hapus Data"><button class="btn-danger btn-user ;" style="width:-webkit-fill-available;">Hapus</button></a>
                </td>
              </tr>
              <?php 
              echo rp(10000);
              $no++;
              endwhile;
              
              ?>
            </table>
            <h2>Format Tanggal PHP </h2>
<?php
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

echo tgl_indo(date('Y-m-d')); // 21 Oktober 2017

echo "<br/>";
echo "<br/>";

echo tgl_indo("1994-02-15"); // 15 Februari 1994


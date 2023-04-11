<?php
                  include "../koneksi.php";
                  $query="SELECT max(id_tagihan) as maxcode from tbl_pembayaran";
 				  $hasil= mysqli_query($koneksi,$query);
 				  $data=mysqli_fetch_array($hasil);
 				  $maxcode=$data["maxcode"];
                  
				?>
 <?php
              $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_pembayaran
              INNER JOIN tbl_peserta ON tbl_pembayaran.id_peserta=tbl_peserta.id_peserta
              INNER JOIN tbl_kursus ON tbl_pembayaran.id_kursus=tbl_kursus.id_kursus 
              WHERE id_tagihan='$maxcode'
    
               ");
            ?>
			  <?php
			  function rp($angka){
				if(is_numeric($angka)){
				  $formatangka= number_format($angka,'0',',','.');
				  return $formatangka;}
			  }
              $no=1;
              while($row=mysqli_fetch_assoc($hasil)):
                $noinvoice= $row["id_tagihan"]; 
                $kursus= $row["paket_kursus"]; 
				$nama= $row["nama"];
				$email= $row["email"];
                $hargapaket= "Rp. ".rp($row["harga"]);
				$pertemu=$row['pertemuan'];
				$notelp=$row['no_telepon'];
				$alamat=$row['alamat'];
              ?>
              
              <?php 
              $no++;
              endwhile;
              
              ?>
            </table>
<?php
	$content = "
	<html> 
	<body>
	
	<img src='logoweb.png' style='background: darkslategray;'> 
	<div style='background: darkslategray; color:white; text-align:center;' >
	Jl. Chairil Anwar, Kota Tangerang ,Kreo Larangan 15156
	<br> website: KRADVERMEDIA Telp: 085894727374
	</div>
	<h2>INVOICE - $noinvoice</h2>
	<br>
	Nama : $nama
	<br><br>
	<table width='100%'>
    	<tr>
        <td width='33%' >Email : $email</td>
        <td width='33%' align='center'> </td>
        <td width='33%' style='text-align: right;'>No Telp : $notelp</td>
    	</tr>
	</table>
	<br>
	Alamat : $alamat
	<br><hr style='height: 3px; box-shadow: 10px 10px 10px darkslategray inset;'>
	Paket Kursus : $kursus
	<br><br>
	Biaya Kursus : $hargapaket
	<br><br>
	Pertemuan : 8 Kali 2 Jam
	<br><hr style='height: 3px; box-shadow: 10px 10px 10px darkslategray inset;'>
	<h4>Transfer Via : </h4>
	BRI.Rek. 355-2313145
	<br>
	A/N : Kradver Media
	<br>
	<h3>Konfirmasi Pembayaran</h3>
	Telp / Wa : 085894727374
	<br><br>
	Email : Info@Kradvermedia.com
	<br><br>
	<h3 style='text-align:right;'>Hormat Kami</h3>
	<br>
	<h3 style='text-align:right;'>Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
	</body>
	</html>
	";

	require_once "vendor/autoload.php";
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
    $mpdf->WriteHTML($content);
    $mpdf->SetHTMLFooter('
	<table width="100%">
    	<tr>
        <td width="33%">{DATE d-m-Y}</td>
        <td width="33%" align="center">Copyright © KRADVER MEDIA </td>
        <td width="33%" style="text-align: right;">Invoice</td>
    	</tr>
	</table>');
    //call watermark content aand image
    $mpdf->SetWatermarkText('KRADVER MEDIA');
    $mpdf->showWatermarkText = true;
    $mpdf->watermarkTextAlpha = 0.1;

	$mpdf->Output('Invoice-Pendaftaran Kursus.pdf',\Mpdf\Output\Destination::DOWNLOAD);
?>

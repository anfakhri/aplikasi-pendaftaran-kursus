<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("location:loginadmin.php");
  exit;
}
?>
<?php
include "../koneksi.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN KRADVER MEDIA</title>

  <!-- Custom fonts for this template-->
  <link href="asset/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="asset/css/sb-admin-2.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="asset/img/icon.png"/>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
        <?php
        include("sidebar.php")
        ?>
      <!-- End of Sidebar -->
      
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Topbar -->
          <?php 
          include("header.php")
          ?>
        <!-- End of Topbar -->
          
        <!-- Main Content -->
        <div id="content">
          <!-- Begin Page Content -->
          <div class="container-fluid">
          
            <!-- Page Heading -->
            <center>
            <br>
            <h2 > Konfirmasi Pembayaran</h2>
            <br>
            <?php
              $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_pembayaran
              INNER JOIN tbl_peserta ON tbl_pembayaran.id_peserta=tbl_peserta.id_peserta
              INNER JOIN tbl_kursus ON tbl_pembayaran.id_kursus=tbl_kursus.id_kursus 
              WHERE status_pembayaran='Belum Terkonfirmasi'
    
               ");
            ?>
            <table class="table table-responsive-sm">
              <tr>
              <th>Tanggal Daftar</th>
                <th style="width: 100px;">ID Tagihan</th>
                <th style="width: 100px;">ID Peserta</th>
                <th>Nama</th>
                <th style="width: 120px;">Harga Kursus</th>
                <th style="width: 120px;">Total Bayar</th>
                <th>Bukti Pembayaran</th>
                <th style="width: 110px;">Tanggal Bayar</th>
                <th style="width: 175px;">Status Pembayaran</th>
                <th></th>
              </tr>
              <?php
              function rp($angka){
                if(is_numeric($angka)){
                  $formatangka= number_format($angka,'0',',','.');
                  return $formatangka;}
                }
              $no=1;
              while($row=mysqli_fetch_assoc($hasil)):
              ?>
              <tr>
                <td><?php echo $row["tanggal_daftar"]; ?> </td>
                <td><?php echo $row["id_tagihan"]; ?></td>
                <td><?php echo $row["id_peserta"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo "Rp. ".rp($row["harga"]); ?> </td>
                <td><?php echo "Rp. ".rp($row["total_bayar"]); ?> </td>
                <td><img hidden src="asset/buktipembayaran/<?php echo $row["bukti_pembayaran"]; ?>" width="50px" height="50px" ></td>
                <td><?php echo $row["tanggal_bayar"]; ?></td>
                <td><?php echo $row["status_pembayaran"]; ?></td>
                <td><a href="ubahkonfirmasi.php?id_tagihan=<?php echo $row["id_tagihan"] ?>" title="Konfirmasi"><button class="btn-primary btn-user ;" style="width:-webkit-fill-available;">Konfirmasi</button></a> 
                </td>
              </tr>
              <?php 
              $no++;
              endwhile;
              
              ?>
            </table>
            </center>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
          <?php 
          include("footer.php")
          ?>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    
<!-- Bootstrap core JavaScript-->
<script src="asset/vendor/jquery/jquery.js"></script>
<script src="asset/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<!-- Core plugin JavaScript-->
<script src="asset/vendor/jquery-easing/jquery.easing.js"></script>

<!-- Custom scripts for all pages-->
<script src="asset/js/sb-admin-2.js"></script>

</body>

</html>
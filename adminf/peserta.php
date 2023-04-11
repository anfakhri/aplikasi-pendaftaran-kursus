<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("location:loginadmin.php");
  exit;
}
?>
  <?php
    include "../koneksi.php";
    $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_peserta ");
  ?>

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
          include("headercari.php")
          ?>
        <!-- End of Topbar -->
          
        <!-- Main Content -->
        <div id="content">
          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <center>
            <h2 > Data Peserta Desain Grafis & Editing Video</h2>
            <br>
            <table class="table table-responsive-sm">
              <tr>
                <th>Tanggal Daftar</th>
                <th style="width: 100px;">ID Peserta</th>
                <th>Nama</th>
                <th>Email</th>
                <th style="width: 150px;">Paket Kursus</th>
                <th>Telepon</th>
                <th style="width: 150px;">Jenis Kelamin</th>
                <th style="width: 160px;">Alamat</th>
                <th></th>
              </tr>
              <?php
              $no=1;
              if(mysqli_num_rows($hasil)){
              while($row=mysqli_fetch_assoc($hasil)){
                
              ?>
              <tr>
                <td><?php echo $row["tanggal_daftar"]; ?> </td>
                <td><?php echo $row["id_peserta"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["paket_kursus"]; ?> </td>
                <td><?php echo $row["no_telepon"]; ?> </td>
                <td><?php echo $row["j_kelamin"]; ?> </td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><a href="ubahdtpeserta.php?id_peserta=<?php echo $row["id_peserta"] ?>" title="Ubah Data"><button class="btn-primary btn-user ;" style="width:-webkit-fill-available;">Ubah</button></a> 
                <a href="hapusdtpeserta.php?id_peserta=<?php echo $row["id_peserta"]?> " onclick=" return confirm(' Apa Anda Yakin Ingin Menghapus Data ?')" title="Hapus Data"><button class="btn-danger btn-user ;" style="width:-webkit-fill-available;">Hapus</button></a>
                </td>
              </tr>
              <?php }}else{
                echo"<tr><td colspan='8' style='font-size: x-large; text-align:center;'>Tidak Ada Data Yang Ditemukan</td></tr>";
              }
              $no++;
              
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
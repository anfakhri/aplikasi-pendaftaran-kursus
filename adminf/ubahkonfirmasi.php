<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Konfirmasi Pembayaran - ADMIN KRADVER MEDIA</title>

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
          
            <section class="page-section bg-primary text-white mb-0" id="ubahdt">
                <div class="container">

                <!-- About Section Heading -->
                <br>
                <h2 class="page-section-heading text-center text-uppercase text-white">Konfirmasi Pembayaran Kursus</h2>
                <br>
                <!-- About Section Content -->
                <?php
                  include "../koneksi.php";
                  $id= $_GET['id_tagihan'];
                  $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_pembayaran 
                  INNER JOIN tbl_peserta ON tbl_pembayaran.id_peserta=tbl_peserta.id_peserta
                  INNER JOIN tbl_kursus ON tbl_pembayaran.id_kursus=tbl_kursus.id_kursus 
                  WHERE id_tagihan='$id'");
                  while($row=mysqli_fetch_assoc($hasil)):
                ?>
                <script>
                    function hanyaangka(evt){
                      var charcode=(evt.which)?evt.which:event.keyCode
                      if (charcode>31 && (charcode<48||charcode>57))
                      return false;
                      return true;
                   }
                </script>
                <form class="user" action="proseskonfirmasi.php" method="POST" enctype="multipart/form-data" >
                            <div class="form-group">
                            <label>ID Tagihan :</label>
                            <input type="text" class="form-control form-control-user"  name="idtagihann" readonly value="<?php echo $row["id_tagihan"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>ID Peserta :</label>
                            <input type="text" class="form-control form-control-user" name="idpesertaa" readonly value="<?php echo $row["id_peserta"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>Nama Lengkap :</label>
                            <input type="text" class="form-control form-control-user" name="inputnama"  readonly value="<?php echo $row["nama"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>Total Pembayaran : Rp. </label>
                            <input type="text" class="form-control form-control-user" name="totalpembayar" maxlength="7" require="required" placeholder="Total Pembayaran" autocomplete="off" onkeypress="return hanyaangka(event)">
                            </div>
                            <div class="form-group">
                            <label>Upload Bukti Pembayaran :</label>
                            <input type="file" name="fotoo" require>
                            </div>
                            <div class="form-group">
                            <label>Tanggal Pembayaran :</label>
                            <input type="date" class="form-control" name="tanggal" value="2020-07-01" max="2050-12-31">
                            </div>
                            <br>
                            <br>
                            <div style="text-transform:uppercase; font-style:italic;">
                            <button type="submit" name="konfirmasi" class="btn btn-info btn-user btn-block" onclick="return confirm('Mengkonfirmasi Pembayaran ?')">
                            Konfirmasi Pembayaran</button>
                            </div>      
                </form>
                <?php endwhile?>
                <br>
                </div>
            </section>
          
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Data Peserta - ADMIN KRADVER MEDIA</title>

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
                <h2 class="page-section-heading text-center text-uppercase text-white">Ubah Data Peserta</h2>
      
                <!-- Icon Divider -->
                <center>Isi data diri pada form di bawah ini dengan benar.</center>
                <br>
                <!-- About Section Content -->
                <script>
                  function hanyaangka(evt){
                    var charcode=(evt.which)?evt.which:event.keyCode
                    if (charcode>31 && (charcode<48||charcode>57))
                    return false;
                    return true;
                  }
                </script>
                <?php
                  include "../koneksi.php";
                  $id= $_GET['id_peserta'];
                  $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_peserta WHERE id_peserta='$id'");
                  while($row=mysqli_fetch_assoc($hasil)):
                ?>
                <form class="user" action="updatedtpeserta.php" method="POST">
                            <div class="form-group">
                            <label>ID Peserta :</label>
                            <input type="text" class="form-control form-control-user" name="idpesertaa" readonly value="<?php echo $row["id_peserta"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>Nama Lengkap :</label>
                            <input type="text" class="form-control form-control-user" name="inputnamalengkap" readonly value="<?php echo $row["nama"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control form-control-user" require maxlength="50" name="inputemail" value="<?php echo $row["email"]; ?>" autocomplete="off" >
                            </div>
                            <div class="form-group">
                            <label>No Telepon :</label>
                            <input type="text" class="form-control form-control-user" require maxlength="13" name="inputnotelepon" onkeypress="return hanyaangka(event)" value="<?php echo $row["no_telepon"]; ?>" autocomplete="off" >
                            </div>
                            <div class="form-group">
                            <label>Alamat :</label>
                            <input type="text" class="form-control form-control-user" require maxlength="50" name="inputalamat" value="<?php echo $row["alamat"]; ?>" autocomplete="off" >
                            </div>
                            
                            <br>
                            <br>
                            <div style="text-transform:uppercase; font-style:italic;">
                            <button type="submit" class="btn btn-info btn-user btn-block" onclick="return confirm('Apa Anda Yakin Ingin Mengubah Data ?')">
                            Simpan Data</button>
                        </div>      
                </form>
                  <?php endwhile;?>
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
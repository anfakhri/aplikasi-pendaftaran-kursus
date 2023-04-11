<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ubah Paket Kursus - ADMIN KRADVER MEDIA</title>

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
                <h2 class="page-section-heading text-center text-uppercase text-white">Ubah Paket Kursus</h2>
                <!-- Icon Divider -->
                <br>
                <!-- About Section Content -->
                <?php
                  include "../koneksi.php";
                  $id= $_GET['id_kursus'];
                  $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_kursus WHERE id_kursus='$id'");
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
                <form class="user" action="updatedtkursus.php" method="POST">
                            <div class="form-group">
                            <label>ID Kursus :</label>
                            <input type="text" class="form-control form-control-user" name="idkursuss" readonly value="<?php echo $row["id_kursus"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>Kategori :</label>
                            <input type="text" class="form-control form-control-user" name="kategorii" readonly value="<?php echo $row["kategori"]; ?>">
                            </div>
                            <div class="form-group">
                            <label>Software 1 :</label>
                            <input type="text" class="form-control form-control-user" name="softw1" maxlength="30" value="<?php echo $row["software1"]; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                            <label>Software 2 :</label>
                            <input type="text" class="form-control form-control-user" name="softw2" maxlength="30" value="<?php echo $row["software2"]; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                            <label>Software 3 :</label>
                            <input type="text" class="form-control form-control-user" name="softw3" maxlength="30" value="<?php echo $row["software3"]; ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                            <label>Harga Paket : Rp.</label>
                            <input type="text" class="form-control form-control-user" name="hargapakeet" maxlength="7" value="<?php echo $row["harga"]; ?>" autocomplete="off" onkeypress="return hanyaangka(event)">
                            </div>
                            <br>
                            <br>
                            <div style="text-transform:uppercase; font-style:italic;">
                            <button type="submit" class="btn btn-info btn-user btn-block" onclick="return confirm('Apa Anda Yakin Ingin Mengubah Data ?')">
                            Simpan Data </button>
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
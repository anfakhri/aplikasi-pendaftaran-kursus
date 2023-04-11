<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("location:loginadmin.php");
  exit;
}
?>
<?php
    include "../koneksi.php";
    $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_jadwal ");
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
            <h2 > Jadwal Kursus</h2>
            <br>
            <table class="table table-responsive-sm">
              <tr>
                <th>No</th>
                <th>ID Jadwal</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Pertemuan</th>
                <th>Keterangan</th>
                <th></th>
              </tr>
              <?php
              $no=1;
              while($row=mysqli_fetch_assoc($hasil)):

              ?>
              <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $row["id_jadwal"]; ?></td>
                <td><?php echo $row["hari"]; ?></td>
                <td><?php echo $row["waktu"]; ?></td>
                <td><?php echo $row["pertemuan"]; ?> </td>
                <td><?php echo $row["keterangan"]; ?> </td>
                <td><a href="ubahjadwal.php?id_jadwal=<?php echo $row["id_jadwal"] ?>" title="Ubah Data"><button class="btn-primary btn-user ;" style="width:-webkit-fill-available;">Ubah</button></a> 
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
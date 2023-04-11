<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jadwal Kursus - KRADVER MEDIA</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/icon.png"/>
</head>

<body id="page-top">

<?php 
 include("useheader.php")
 ?>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center"
  style="background-image: url(img/backweb.jpg);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;">
    <div class="container d-flex align-items-center flex-column" >


      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0" style="text-shadow: 0px 2px 10px black;">KRADVER MEDIA</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-photo-video"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0" style="font-family: cursive;text-shadow: 0px 2px 5px black;">Desain Grafis - Editing Video</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Jadwal Kursus</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-photo-video"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      <?php
        include "../koneksi.php";
        $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_jadwal ");
      ?>

      <center>
      <table class="table table-responsive-sm">
              <tr>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Pertemuan</th>
              </tr>
              <?php
              $no=1;
              while($row=mysqli_fetch_assoc($hasil)):
              ?>
              <tr>
                <td><?php echo $row["hari"]; ?></td>
                <td><?php echo $row["waktu"]; ?></td>
                <td><?php echo $row["pertemuan"]; ?> </td>
              </tr>
              <?php 
              $no++;
              endwhile;
              ?>
      </table>     
      <br>
      <p style="
    font-size: large;
    font-style: italic;
    float: left;
    font-family: sans-serif;">Keterangan Waktu Kursus : 2 Jam / 1x Pertemuan</p> 
      </center>
     
    </div>
  </section>

 <!-- Copyright Section -->
 <?php 
 include("usefooter.php")
 ?>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Editing Video - KRADVER MEDIA</title>

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

  

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">Editing Video</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-photo-video"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead" style="text-align: justify;">Editing atau penyuntingan adalah proses menyusun, memotong dan memadukan kembali rekaman menjadi sebuah cerita yang utuh dan lengkap. </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead" style="text-align: justify;">Penyuntingan gambar memiliki manfaat psikologis untuk mencapai berbagai efek, untuk membantu bercerita, memprovokasi ide, atau perasaan, atau untuk menarik perhatian sebagai elemen-elemen bentuk sinematik.</p>
        </div>
      </div>

      <!-- About Section Button -->
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="usedaftar.php">
        <i class="fas fa-sticky-note mr-2"></i>
          Daftar Sekarang
        </a>
      </div>
      <br><br>
      <?php
        include "../koneksi.php";
        $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_kursus WHERE kategori='Editing Video' ");
      ?>
      <table class="lead table table-responsive-sm" style=" color:antiquewhite;">
              <tr>
                <th colspan="3" style="text-align: center;">Software Editing Video</th>
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
                <td style=" text-align:center; width: 33%;"><?php echo $row["software1"]; ?></td>
                <td style=" text-align:center; width: 33%;"><?php echo $row["software2"]; ?> </td>
                <td style=" text-align: center;"><?php echo $row["software3"]; ?> </td>
              </tr>
              <tr>
              <td  colspan="2" style="text-align: center;"> Harga Paket Kursus :</td>
              <td  style="text-align: center;"><?php echo "Rp. ".rp($row["harga"]); ?> </td>
              </tr>
              <tr>
              
              </tr>
            <?php 
            $no++;
            endwhile;
            ?>
            </table>
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

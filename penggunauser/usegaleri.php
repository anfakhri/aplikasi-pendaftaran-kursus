<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Galeri - KRADVER MEDIA</title>

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
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">GALERI</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-photo-video"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-expand fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/3d.jpg" style="height: 250px;" alt="">
            <center style="font-family: cursive;">Manipulasi Foto</center>
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-expand fa-3x"></i>
              </div>
            </div>
            <center><img class="img-fluid" src="img/portfolio/poster.jpg" style="height: 250px;" alt=""></center>
            <center style="font-family: cursive;">Poster</center>
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-expand fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/perspek.jpg" style="height: 250px;" alt="">
            <center style="font-family: cursive;">Perspektif / Desain 3D</center>
          </div>
        </div>

        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            </div>
            <video width="350" height="250" controls="">
              <source src="img/portfolio/greenscreen.mp4" type="video/mp4">
            </video>
            <center style="font-family: cursive;">Efek Greenscreen</center>
          </div>
        </div>

        <!-- Portfolio Item 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            </div>
            <img class="img-fluid" src="img/portfolio/animasikray.gif" alt="">
            <center style="font-family: cursive;">Animasi</center>
          </div>
        </div>

        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            </div>
            <video width="350" height="250" controls="">
              <source src="img/portfolio/arjuno.mp4" type="video/mp4">
            </video>
            <center style="font-family: cursive;">Dokumenter</center>
          </div>
        </div>

      </div>
      <!-- /.row -->

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

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Manipulasi Foto</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-photo-video"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/3d.jpg" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                Manipulasi foto melibatkan proses transformasi atau mengubah sebuah foto dengan
                menggunakan berbagai metode dan teknik untuk mencapai hasil yang diinginkan.
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Poster</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-photo-video"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/poster.jpg" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                Poster adalah karya seni atau desain grafis yang memuat komposisi gambar dan huruf di atas kertas berukuran besar atau kecil. 
                Pengaplikasiannya dengan ditempel di dinding atau permukaan datar lainnya, dengan sifat mencari perhatian mata sekuat mungkin. Karena itu poster biasanya dibuat dengan warna-warna kontras dan kuat.
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Perspektif</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-photo-video"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/perspek.jpg" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                Perspektif adalah suatu teknik sistem matematika untuk membentuk suatu proyeksi bidang tiga dimensi ke dalam bidang dua dimensi,
                seperti kertas atau canvas. Hal ini dapat membentuk kemungkinan untuk mengambar sebuah obyek atau benda dalam suatu ruang secara nyata 
                diatas bidang datar atau dapat membentuk suatu gambar geometri sehingga tampak di gambarkan atas, bawah, samping dan depan pada obyek tersebut.
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

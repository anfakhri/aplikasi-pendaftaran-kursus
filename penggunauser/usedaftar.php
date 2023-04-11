<?php
include "../koneksi.php";
                        
            ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendaftaran Kursus - KRADVER MEDIA</title>

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
      <h2 class="page-section-heading text-center text-uppercase text-white">Pendaftaran</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-photo-video"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      <center>Isi data diri anda pada form di bawah ini dengan benar.</center>
      <br>

      <script>
        function pilihan(){
          var kodee=document.getElementById("formdaftar").paketkursus.value;
          if(kodee=="Desain Grafis"){
            <?php // mencari kode barang dengan nilai paling besar
            $query="SELECT max(id_peserta) as maxcode from tbl_peserta where paket_kursus='desain grafis'";
            $hasil= mysqli_query($koneksi,$query);
            $data=mysqli_fetch_array($hasil);
            $maxcode=$data["maxcode"];
            $nourut=(int) substr($maxcode,2,3);
            $nourut++;
            $char="DG";
            $kodedesain=$char. sprintf("%03s",$nourut);
            ?>
            document.getElementById("idpesertaa").value="<?php echo "$kodedesain"?>";
          }else if(kodee=="Editing Video"){
            <?php
              // mencari kode barang dengan nilai paling besar
            $query="SELECT max(id_peserta) as maxcode from tbl_peserta where paket_kursus='Editing Video'";
            $hasil= mysqli_query($koneksi,$query);
            $data=mysqli_fetch_array($hasil);
            $maxcode=$data["maxcode"];
            $nourut=(int) substr($maxcode,2,3);
            $nourut++;
            $char="EV";
            $kodeediting=$char. sprintf("%03s",$nourut);
            ?>
            document.getElementById("idpesertaa").value="<?php echo "$kodeediting"?>";
          }
        }
        function hanyaangka(evt){
          var charcode=(evt.which)?evt.which:event.keyCode
          if (charcode>31 && (charcode<48||charcode>57))
          return false;
          return true;
        }
      </script>
      <!-- About Section Content -->
     <form id="formdaftar" name="formdaftar" class="user" action="../tambahdata.php" method="POST">
                <div class="form-group">
                  <label hidden>ID Peserta :</label>
                  <input type="hidden" class="form-control form-control-user" readonly id="idpesertaa" name="idpesertaa" placeholder="ID Peserta" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Nama Lengkap :</label>
                  <input type="text" class="form-control form-control-user" id="inputnama" required="required" name="inputnama" placeholder="Nama Lengkap" maxlength="35" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>Email :</label>
                  <input type="email" class="form-control form-control-user" id="inputemail" required="required" name="inputemail" placeholder="Email" maxlength="50" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>No Telepon :</label>
                  <input type="text" class="form-control form-control-user" id="inputnotelp" required="required" name="inputnotelp" placeholder="No Telepon" maxlength="13" autocomplete="off" onkeypress="return hanyaangka(event)">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin :</label>
                  <label><input type="radio" required id="jeniskelamin" name="jenis_kelamin" value="Laki-Laki" /> Laki-laki</label>
                  <label><input type="radio" id="jeniskelamin" name="jenis_kelamin" value="Perempuan" /> Perempuan</label>
                </div>
                <div class="form-group">
                  <label>Alamat :</label>
                  <input type="text" class="form-control form-control-user"id="inputalamat" required="required" name="inputalamat" placeholder="Alamat" maxlength="50" autocomplete="off">
                </div>
                <div>
                  <label>Pilih Paket Kursus :</label>
                  <select class="select form-control" required="required" id="paketkursus" name="paketkursus" onchange="pilihan()">
                    <option  value selected="selected">Pilih Paket</option>
                    <option name="inputpaket" value="Desain Grafis">Desain Grafis</option>
                    <option name="inputpaket" value="Editing Video">Editing Video</option>
                  </select>
                </div>
                <br>
                <br>
                <div >
                  <button type="submit" name="simpan" class="btn btn-secondary btn-user btn-block" style="text-transform:uppercase; font-style:italic;">
                  Daftar Sekarang</button>
                </div>      
      </form>
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

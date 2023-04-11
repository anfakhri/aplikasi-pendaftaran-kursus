<?php 
session_start();
if(isset($_SESSION["username"])){
  header("location:homeadmin.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Masuk - KRADVER MEDIA</title>

  <!-- Custom fonts for this template-->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="asset/img/icon.png"/>

</head>

<body class="bg-gradient-primary">
<?php 
  
  if(isset($_SESSION["username"])){
    require_once("../cek_login.php");
  }
?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
        <img class=" img-fluid" width="300" src="asset/img/logoweb.png" alt="" style="width: auto;background-color: #4e73df;">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="">
              <div class="">
                <div class="p-5">
                  <div class="text-center">
                  
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin</h1>
                  </div>
                  <form class="user" method="POST" action="../cek_login.php">
                    <div class="form-group">
                     Nama Pengguna : <input type="text" class="form-control form-control-user" name="username" require="required" maxlength="25" autocomplete="off" aria-describedby="usernamemail" placeholder="">
                    </div>
                    <div class="form-group">
                      Kata Sandi : <input type="password" class="form-control form-control-user" name="password" require="required" maxlength="8" autocomplete="off"  placeholder="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block" >Login</button>
               
                   
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="asset/js/sb-admin-2.min.js"></script>
 
</body>

</html>

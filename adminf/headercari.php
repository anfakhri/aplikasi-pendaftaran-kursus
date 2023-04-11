<?php include "../koneksi.php";?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Navbar -->
          <!-- Topbar Search -->
          <form class=" navbar-search" action="" method="POST" >
            <div class="input-group">
              <input type="text" name="caridata" class="form-control bg-light border-0 small" placeholder="Cari ID Peserta..." aria-label="Search" aria-describedby="basic-addon2" maxlength="10" autocomplete="off">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        <?php
        error_reporting(0);
        $cari= $_POST['caridata'];
        if ($cari !=''){
            $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_peserta WHERE id_peserta LIKE '".$cari."' ");
        }else{
            $hasil=mysqli_query($koneksi,"SELECT * FROM tbl_peserta ");
        }
        
        ?>
          
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
            <img class="img-profile rounded-circle" src="asset/img/icon.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profil
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Pengaturan
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Keluar
            </a>
            </div>
        </li>
    </ul>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk Mengakhiri?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="../keluar.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>
</nav>
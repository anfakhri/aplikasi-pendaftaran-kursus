<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homeadmin.php">
    <img class="fas fa-fw fa-3x "src="asset/img/icon.png">
    <div class="sidebar-brand-text mx-3">KRADVER MEDIA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="homeadmin.php">
        <i class="fas fa-fw fa-desktop"></i>
        <span>Administrator</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    DATA
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user fa-sm fa-fw "></i>
        <span>Peserta</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <center ><h6 class="collapse-header">Peserta </h6></center>
        <a class="collapse-item" href="pesertadg.php">Desain Grafis</a>
        <a class="collapse-item" href="pesertaev.php">Editing Video</a>
        <a class="collapse-item" href="peserta.php">Ubah Data Peserta</a>
        </div>
        </div>
    </li>

    <!-- Nav Item - Paket -->
    <li class="nav-item">
        <a class="nav-link" href="paketmin.php">
        <i class="fas fa-fw fa-list"></i>
        <span>Paket Kursus</span></a>
    </li>

    <!-- Nav Item - Jadwal -->
    <li class="nav-item">
        <a class="nav-link" href="jadwalmin.php">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Jadwal</span></a>
    </li>



    <!-- Nav Item - Pembayaran Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-book"></i>
        <span>Pembayaran</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="terkonfirmasi.php">Terkonfirmasi</a>
        <a class="collapse-item" href="belumkonfirm.php">Belum Terkonfirmasi</a>
        <a class="collapse-item" href="konfirmasibayar.php">Konfirmasi Pembayaran</a>
        </div>
        </div>
    </li>

    


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
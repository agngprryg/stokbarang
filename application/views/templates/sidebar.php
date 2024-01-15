<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('back') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-fw fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Wa<span class = "text-info">rung</span>  Se<span class= "text-info">hat</span></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Management
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data_barang') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Barang</span></a>
            </li>
            
            <!-- divider -->
            <hr class = "border border-light m-0">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data_jenis') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Jenis</span></a>
            </li>

            <!-- divider -->
            <hr class = "border border-light m-0">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('transaksi') ?>">
                    <i class="fas fa-wallet"></i>
                    <span>Transaksi</span></a>
            </li>

           <!-- divider -->
           <hr class = "border border-light m-0">

           <li class="nav-item">
                <a class="nav-link" href="<?= base_url('laporan') ?>">
                    <i class="fas fa-book"></i>
                    <span>Laporan</span></a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center mt-5">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
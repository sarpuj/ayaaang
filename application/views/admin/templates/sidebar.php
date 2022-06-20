 <!-- Sidebar -->
 <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-syringe"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Stock Darah Kulon Progo</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">


     <!-- Heading -->
     <div class="sidebar-heading">
         Administrator
     </div>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('admin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Menu
     </div>

     <!-- Nav Item - Stok Darah -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('data_stock'); ?>">
             <i class="far fa-fw fa-list-alt"></i>
             <span>Stock Darah</span></a>
     </li>

     <!-- Nav Item - Rumah Sakit -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('data_rs'); ?>">
             <i class="far fa-fw fa-list-alt"></i>
             <span>Daftar Rumah Sakit</span></a>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
             Data
         </div>

         <!-- Nav Item - Rumah Sakit -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('data_petugas'); ?>">
             <i class="far fa-fw fa-list-alt"></i>
             <span>Data Petugas</span></a>

         <!-- Divider -->
         <hr class="sidebar-divider">

     </li>
     <!-- Nav Item - Logout -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('auth'); ?>" data-toggle="modal" data-target="#logoutModal">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>Logout</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
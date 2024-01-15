 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="index3.html" class="nav-link">Home</a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                 <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search"
                             aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li>
         <!---<li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>  --->
     </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="dist/img/AdminLTELogo.png" alt="SystEngine23 Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">SystEngine23</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="info">
                 <a href="<?php $_SERVER['PHP_SELF']?>" class="d-block"><?php  echo $_SESSION["username"];  ?></a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <li class="nav-item">
                     <a href="about.php" class="nav-link">
                        <i class="fas fa-info-circle"></i>
                         <p>Acerca de</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="clientes.php" class="nav-link">
                     <i class="fas fa-user-tie"></i>
                         <p>Clientes</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="contacto.php" class="nav-link">
                     <i class="far fa-address-book"></i>
                         <p>Contacto</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="contenido.php" class="nav-link">
                     <i class="fas fa-heading"></i>
                         <p>Nombre de la empresa</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="quote.php" class="nav-link">
                     <i class="fas fa-receipt"></i>
                         <p>Cotizacion</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="addservices.php" class="nav-link">
                     <i class="fas fa-th"></i>
                         <p>Servicios</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="why.php" class="nav-link">
                     <i class="fas fa-question-circle"></i>
                         <p>Por que nosotros</p>
                     </a>
                 </li>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
     
    <a href="#" class="brand-link logo-switch">
    <img src="<?php echo SERVERURL;?>vistas/img/sistema/logo_sistema_sm.png" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
    <img src="<?php echo SERVERURL;?>vistas/img/sistema/logo_sistema.png" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 80px">
</a>

    <!-- Sidebar -->
    <div class="sidebar">
 
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                 
              </p>
            </a>
           
          </li>
          <li class="nav-item not-has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
   
          <li class="nav-item has-treeview "> <!--menu-open-->
            <a href="#" class="nav-link"><!--active-->
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Almacen
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo SERVERURL;?>proveedores" class="nav-link"><!--active-->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li> 
            </ul>
          </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
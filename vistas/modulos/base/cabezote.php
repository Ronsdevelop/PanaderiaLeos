  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
    
   
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <?php
           if ($_SESSION['idUser'] != "") {
               $datos = ControladorUsuarios::ctrMostrarDatosPerfil();

              echo '<img src="'.SERVERURL.$datos['avatar'].'" id="imgPerfil" class="user-image img-circle elevation-2" alt="User Image">';
           } 
          ?>
          
          <span class="d-none d-md-inline"><?php echo $_SESSION["nombre"];?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
          <?php echo '<img src="'.SERVERURL.$datos['avatar'].'" id="imgPerfil" class="user-image img-circle elevation-2" alt="User Image">';?>
            

            <p>
              <?php echo $_SESSION["nombre"];?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?php echo SERVERURL;?>perfil" class="btn btn-default btn-flat">Profile</a>
            <a href="<?php echo SERVERURL;?>salir" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
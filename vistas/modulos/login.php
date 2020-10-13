<body class="authentication-bg authentication-bg-pattern">
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <a href="index.html">
                                <span><img src="<?php echo SERVERURL;?>vistas/img/sistema/logo.png" alt="" height="90"></span>
                            </a>                           
                        </div>

                        <h5 class="auth-title">Iniciar Sesion</h5>

                        <form method="POST" action="#" autocomplete="off">
                       

                            <div class="form-group mb-3">
                                <label for="emailaddress">Usuario</label>
                                <input class="form-control" type="text" id="ingUsuario" name="ingUsuario" required="" placeholder="Ingresa tú Usuario">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" id="ingPassword" name="ingPassword" placeholder="Ingresa Tú password">
                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox checkbox-info">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                    <label class="custom-control-label" for="checkbox-signin">Recuérdame</label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-danger btn-block" style="background:#59120E; border:#59120E;" type="submit"> ACCEDER </button>
                            </div>

                            <?php
                            $login = new ControladorUsuarios();
                            $login -> ctrIngresoUsuario();

                            ?>

                        </form>                      

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Olvidaste la contraseña?</a></p>
                            
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
        <!-- end page -->

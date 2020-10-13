<?php
session_start();
include "config/global.php";
?>


<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Panaderia Leos | <?php echo (isset($_GET["ruta"]))? ucwords($_GET["ruta"]):'Login'?> </title>
    <link rel="icon" href="<?php echo SERVERURL;?>vistas/img/sistema/logo_sistema_sm.png">

    <!-- Font Awesome 
    <link rel="stylesheet" href="vistas/public/plugins/fontawesome-free/css/all.min.css">-->
    <link href="<?php echo SERVERURL;?>vistas/public/plugins/fontawesome-free-5.14.0/css/all.css" rel="stylesheet"> <!--load all styles -->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo SERVERURL;?>vistas/public/plugins/sweetAlert2/sweetalert2.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <?php
        if (!isset($_GET["ruta"])||$_GET["ruta"]=='ingreso') {
            echo'<link rel="stylesheet" href="'.SERVERURL.'vistas/public/dist/css/login.css">';
            echo'<link rel="stylesheet" href="'.SERVERURL.'vistas/public/dist/css/bootstrap.min.css">';
        }else {
            echo'<link rel="stylesheet" href="'.SERVERURL.'vistas/public/dist/css/adminlte.css">';
        }
        ?>
            
</head>


<?php 
     if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]== "ok") { 
         
         echo'
         <body class="hold-transition sidebar-mini">
         <div class="wrapper">';
       
  
        /* ====================================== 
        CABEZOTE
        ====================================== */      
               
        include "modulos/base/cabezote.php";

        /* ====================================== 
        MENU
        ====================================== */
        
        include "modulos/base/menu.php";
         /* ====================================== 
         CONTENIDO
         ====================================== */
         $rutas = array();
         
            if (isset($_GET["ruta"])) {
                $rutas = explode("/",$_GET["ruta"]);
               

                if ($rutas[0]== "inicio" ||
                    $rutas[0]== "usuarios"||
                    $rutas[0]== "proveedores"||
                    $rutas[0]== "clientes"||
                    $rutas[0]=="salir"||
                    $rutas[0]=="productos"||
                    $rutas[0]=="detallescliente") {
                    include "modulos/".$rutas[0].".php";  
                }else{
                    include "modulos/404.php" ;
                    }
            }else{
                include "modulos/inicio.php" ; 
            }
     
           /* ====================================== 
           FOOTER
           ====================================== */ 
  
            include "modulos/base/footer.php";
            echo '
          
            <aside class="control-sidebar control-sidebar-dark">
              
            </aside>
            
                    </div>';
       
 
    }else{
         include "modulos/login.php";
    }

?>     
    
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo SERVERURL;?>vistas/public/plugins/jquery/jquery.min.js"></script>


<!-- Bootstrap 4 -->
<script src="<?php echo SERVERURL;?>vistas/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SERVERURL;?>vistas/public/dist/js/adminlte.min.js"></script>


 
<!-- DataTables -->
<script src="<?php echo SERVERURL;?>vistas/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/public/plugins/sweetAlert2/sweetalert2.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/public/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo SERVERURL;?>vistas/js/app/<?php echo isset($_GET["ruta"])? $rutas[0]:'login'?>.js"></script>
<script src="<?php echo SERVERURL;?>vistas/js/app/siberbar.js"></script>

 
 

</body>
</html>





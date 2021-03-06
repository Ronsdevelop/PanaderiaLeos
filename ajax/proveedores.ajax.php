<?php

    require_once "../modelos/proveedores.modelo.php"; 

    class AjaxProveedores{

        public $codProvedor;
        public function ajaxEditarProveedor(){
            $tabla ="proveedor";
            $item = "proveedor_id";
            $valor = $this-> codProvedor;
            $respuesta = ModeloProveedor::MdlMostrarProveedores($tabla,$item,$valor);
            echo json_encode($respuesta);


        }

        public $proveedorEliminar;
        public function ajaxEliminarProveedor(){
            $tabla = "proveedor";
            $item = "proveedor_id";
            $valor = $this-> proveedorEliminar;
            $respuesta = ModeloProveedor::MdlEliminaProveedor($tabla,$item,$valor);
            echo json_encode($respuesta);
      
            
        }

        public $valorValidar;
        public $itemValidar;
        public function ajaxValidarProveedor(){
            $tabla = "proveedor";
            $item = $this->itemValidar;;
            $valor = $this->valorValidar;
            $respuesta = ModeloProveedor::MdlMostrarProveedores($tabla,$item,$valor);
            echo json_encode($respuesta);
       
          
        }
    }


    if (isset($_POST["codigoProv"])) {
        $proveedor = new AjaxProveedores();
        $proveedor -> codProvedor = $_POST["codigoProv"];
        $proveedor-> ajaxEditarProveedor();
         
    }
    if (isset($_POST["codProveedor"])) {
        $pEliminar = new AjaxProveedores();
        $pEliminar -> proveedorEliminar = $_POST["codProveedor"];
        $pEliminar -> ajaxEliminarProveedor();
    }

    if (isset($_POST["valorValidar"])) {
        $validarProv = new AjaxProveedores();
        $validarProv -> valorValidar=$_POST["valorValidar"];
        $validarProv -> itemValidar=$_POST["itemValidar"];
        $validarProv -> ajaxValidarProveedor();
    }




?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PROVEEDORES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Almacen</a></li>
              <li class="breadcrumb-item active">Proveedores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PROVEEDORES DE LA PANADERIA</h3>
                <button type="button" class="btn btn-dark width-xl waves-effect waves-light float-right" onClick="abrirModalProveedor();" id="btnAbrirModal"><i
                                        class="mdi mdi-plus-circle mr-1"></i>Agregar Proveedor</button> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover table-sm" id="tablaProveedor">   <!--id="tickets-table" data-toggle="modal" data-target="#con-close-modal"-->
                            <thead class="thead-dark">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>RAZON SOCIAL</th>
                                <th>DIRECCION</th>
                                <th>CONTACTO</th>
                                <th>CELULAR</th>                                                   
                                <th class="text-center" width="80px" >COMPRAR</th>                             
                                <th class="text-center" width="80px">VER</th>
                                <th class="text-center" width="80px">EDITAR</th>
                                <th class="text-center" width="80px">BORRAR</th>                        
                            </tr>
                            </thead>

                            <tbody> 
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>RAZON SOCIAL</th>
                                <th>DIRECCION</th>
                                <th>CONTACTO</th>
                                <th>CELULAR</th>                                                   
                                <th>COMPRAR</th>                             
                                <th>VER</th>
                                <th>EDITAR</th>
                                <th>BORRAR</th>                       
                            </tr>
                            </tfoot> 
                        </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

             <!-- MODAL AGREGAR PROVEEDOR --> 

             <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div id="diModal" class="modal-content bg-dark">

                                    <form role="form" id="formulario" enctype="multipart/form-data" autocomplete="off">
                                    <div id="cabeceraM" class="modal-header">
                                    
                                    <h5 class="modal-title" id="tituloModal"><span class="fa fa-pencil-alt"></span> Agregar Proveedor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close" aria-hidden="true"><span aria-hidden="true">&times;</span></button></button>
                                    </div>
                                    <input type="hidden" id="txtOpcion" name="txtOpcion">
                                    <input type="hidden" name="txtId" id="txtId">
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="txtRazon" id="txtRazon" placeholder="Razon Social Proveedor">
                                            
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="txtDireccion" id="txtDireccion" placeholder="Direccion Proveedor">
                                           
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="txtContacto" id="txtContacto" placeholder="Contacto para Consultas">
                                              
                                                    
                                        </div>
                                        <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-id-card"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="txtIndetificacion" id="txtIndetificacion" placeholder="Ruc o Dni Proveedor">
                                               
                                        </div>
                                        <div class="row">
                                           
   
                                            <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="txtCelular" id="txtCelular" placeholder="Celular">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="txtFijo" id="txtFijo" placeholder="Telefono fijo">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                </div>
                                                <input type="email" class="form-control" name="txtCorreo" id="txtCorreo" placeholder="Direccion de email">
                                             
                                        </div>    
                                          
                                        <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-search-location"></i></span>
                                                    </div>
                                                    <textarea class="form-control" name="txtReferencia" id="txtReferencia" cols="30" rows="1" placeholder="Referencia del local"></textarea>
                                     
                                        </div>     
                                        
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light " data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-outline-light" id="btnEditar">Guardar</button>
                                    </div>
 
                                    </form>
                                    
                                </div>
                            </div>
            </div><!-- /.modal -->   
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
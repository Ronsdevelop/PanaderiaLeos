const codigoprov = $("#prov").val();
const data = new FormData();
data.append('codigoProv',codigoprov);

let url = "../ajax/proveedores.ajax.php";
 

fetch(url,{
  method:'POST',
  body: data

}).then(resp=> resp.json())
.then(datos=>{
  document.getElementById("menucabe").innerHTML = datos["rason"]; 
  let infoprov =`            
  <h6><strong>CELULAR : </strong>${datos["nCelular"]}</h6>
  <h6><strong>TELEFONO : </strong>${datos["nFono"]}</h6>
  <h6><strong>DIRECCION : </strong>${datos["direccion"]}</h6>
  <h6><strong>CONTACTO : </strong>${datos["contacto"]}</h6>
  <h6><strong>REFERENCIA : </strong>${datos["referencia"]}</h6>
  <h6><strong>EMAIL : </strong>${datos["email"]}</h6>
  `;
  //aqui se hizo un cambio

  let cabeceraprov =` 
  <h3 class="widget-user-username text-left font-weight-bold">${datos["rason"]}</h3>
  <h6 class="widget-user-desc text-left">Desde : ${datos["dataregistro"]} </h6>
  `  ;
  document.getElementById("cabeprov").innerHTML = cabeceraprov;
  document.getElementById("info").innerHTML = infoprov;

 
 

})

$(document).ready(function() {
 
    tblCompras =  $('#tbFacompras').DataTable({
        paging: true,                      
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en tabla Productos",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            } 
        },
        
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }}); 

        tblPendientes =  $('#tbFapendentes').DataTable({
            paging: true,                      
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
            language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en tabla Productos",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                } 
            },
            
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }});

            //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90,34,67]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40,45,67]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

             


});



 /* ------------------------- */
 /* EDITAR PROVEEDOR  */
 /* ------------------------- */ 
 
 $(document).on("click",".btn-editarPro", function () {
  let codProveedor = $(this).attr("idProveedor");
  let opcion = 3;
  let cabeceraModal = document.getElementById("diModal");
  cabeceraModal.classList.remove("bg-dark");
  cabeceraModal.classList.add("bg-success");
 document.getElementById("tituloModal").innerText = "Editar Usuario";

 document.getElementById("btnEditar").innerText = "Actualizar Usuario";
 
 document.getElementById("txtOpcion").value = opcion;
   const data = new FormData();
   data.append('codigoProv',codProveedor);
   $("#con-close-modal").modal("show");

let url = "../ajax/proveedores.ajax.php";

fetch(url,{
    method:'POST',
    body: data

}).then(resp=> resp.json())
.then(response =>cargarDatosProveedor(response));
  
});



/* ------------------------- */
/* FUNCION PARA ASIGNAR LOS DATOS A CADA ELEMENTO DEL MODAL EDITAR USURAIO*/
/* ------------------------- */

function cargarDatosProveedor(datos) {
  document.getElementById("txtRazon").value = datos["rason"];
  document.getElementById("txtDireccion").value = datos["direccion"];
  document.getElementById("txtContacto").value = datos["contacto"];
  document.getElementById("txtIndetificacion").value = datos["ruc"];
  document.getElementById("txtCelular").value = datos["nCelular"];
  document.getElementById("txtFijo").value = datos["nFono"];
  document.getElementById("txtCorreo").value = datos["email"];
  document.getElementById("txtReferencia").value = datos["referencia"];
  document.getElementById("txtId").value = datos["proveedor_id"];
   
}

/* ====================================== 
EVENTO SUBMIT PARA EDITAR PROVEEDOR
====================================== */

const form = document.getElementById('formulario');
form.addEventListener('submit',function(e){
    e.preventDefault();
    let data = new FormData(form); 
    $("#con-close-modal").modal('hide');
    fetch("../controladores/proveedor.controlador.php",
        {method:"POST",
        body:data}).then(response => response.text())
                   .then(response =>                 
                   console.log("ok"))
                   



})



 
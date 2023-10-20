<!-- INCLUYENDO Bootstrap -->
<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    



  </head>
  <body>
    <!--<h1>Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>



</html>
<!-- INCLUYENDO Bootstrap -->

<?php
include('../tools/controllers/connbdcal.php');  //INCLUYENDO BASE DE DATOS
//$conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec"); 
?>

<?php
$URL2 = "http://localhost/ProyectoTallerPintura/ProyectoTallerPintura/tools/controllers/controller_CITAS.php";
$URL3 = "http://localhost/ProyectoTallerPintura/ProyectoTallerPintura/tools/controllers/verificacionHORAS.php";
?>
    <meta charset='utf-8'/>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>

    <script>

      var fecha;
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:'es',
          editable:true,
          selectable: true,
          allDaySlot: false,

         events: 

         'http://localhost/ProyectoTallerPintura/ProyectoTallerPintura/tools/controllers/agendaCitas.php',
        
         dateClick: function(info) {
          //alert("1");

          //**********RESTRICCIÓN DE DÍAS NO HÁBILES*************
          fecha = info.dateStr;
          const fechaString = fecha; //conversión de formato de fecha (num a string)
          var numDia = new Date (fechaString).getDay(); //devuelve el día
          var dias = ['lunes','martes','miércoles','jueves','viernes'];
          //alert (numDia); 

          if((numDia == "5") || (numDia == "6")) {
            alert("Día inhábil ¡Te atendemos de lunes a viernes!");
          } else {
              $('#modal_agendaCitas').modal("show");
              $('#dia_semana').html(dias[numDia] + " " + fecha); //Muestreo del día en formato de texto, en lugar del número de día y concatenar en JavaScript

              var fechaAJAX = info.dateStr;
              //alert(fechaAJAX);
              var resultado = "";
              var URL3 = "tools/controllers/verificacionHORAS.php";

              $.get(URL3,{fechaAJAX:fechaAJAX},function (datos) {
                alert("working");
              });

                }
              },


           /* alert('Event: ' + info.event.title);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('View: ' + info.view.type);

    // change the border color just for fun
    info.el.style.borderColor = 'red';*/
              

        });
        calendar.render();
      });

    </script>

    <div id='calendar'></div>

<?php

?>

<!-- Modal -->
<div class="modal fade" id="modal_agendaCitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¡Reserva tu cita para el <spna id="dia_semana"></spna>!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
              <center><b>Citas (Turno 1)</b></center>
              <br>
              <div class="d-grid gap-2">
                <button class="btn btn-success" id="btn_t1h1" data-bs-dismiss="modal" type="button">09:00 - 11:30</button>
                <button class="btn btn-success" id="btn_t1h2" data-bs-dismiss="modal" type="button">11:30 - 13:00</button>
                <button class="btn btn-success" id="btn_t1h3" data-bs-dismiss="modal" type="button">13:00 - 14:30</button>
              </div> 
            </div>
            <div class="col-md-6">
            <center><b>Citas (Turno 2)</b></center>
              <br>
              <div class="d-grid gap-2">
                <button class="btn btn-success" id="btn_t2h1" data-bs-dismiss="modal" type="button">16:00 - 17:30</button>
                <button class="btn btn-success" id="btn_t2h2" data-bs-dismiss="modal" type="button">17:30 - 19:00</button>
                <button class="btn btn-success" id="btn_t2h3" data-bs-dismiss="modal" type="button">19:00 - 21:30</button>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal 2 -->
<div class="modal fade" id="modal_formulario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">¡Reserva tu cita para el <spna id="dia_semana"></spna>!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <form action="<?php echo $URL2;?>/tools/controllers/controller_CITAS.php" method="post">  
            <div class="row">
                  <div class="col-md-6">
                      <label for="">Nombre</label>
                      <input type="text" name="Nombre_Cliente" class="form-control">
                  </div>
                  <div class="col-md-6">
                      <label for="">Apellido</label>
                      <input type="text" name="Apellido_Cliente" class="form-control">
                  </div>
                  <div class="col-md-6">
                      <label for="">Télefono</label>
                      <input type="text" name="Telefono_Cliente" class="form-control">
                  </div>
                  <div class="col-md-6">
                      <label for="">Servicio a realizar</label> <!--TITLE EN BASE DE DATOS-->
                      <select name="Servicio_Carro" id="" class="form-control">
                          <option value="Laminado">LAMINADO</option>
                          <option value="Pintura">PINTURA</option>
                          <option value="Otro">OTRO SERVICIO</option>
                      </select>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="">Confirmación de fecha</label>
                      <input type="text" class="form-control" id="fecha_Cita" disabled>
                      <input type="text" name="fecha_cita" class="form-control" id="fecha_Cita2" hidden>
                  </div>
                  <div class="col-md-6">
                      <label for="">Confirmación de hora</label>
                      <input type="text" class="form-control" id="hora_Cita" disabled>
                      <input type="text" name="hora_cita" class="form-control" id="hora_Cita2" hidden>
                  </div>
              </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar cita</button>
        <!--MENSAJE EMERGENTE sweetalert2*******(REVISAR EN DONDE VA PARA QUE NO SE MUESTRE EN CADA ACTUALIZACIÓN DEL NAVEGADOR)-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
          Swal.fire({
              title: "¡Cita registrada con éxito!",
              //text: "You clicked the button!",
              icon: "success"
            });
        </script>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    $('#btn_t1h1').click(function () {
        //alert("sí estoy funcionando");
        $('#modal_formulario').modal("show");
        $('#fecha_Cita').val(fecha);
        $('#fecha_Cita2').val(fecha); 
        var t1h1 = "09:00 - 11:30";
        $('#hora_Cita').val(t1h1);
        $('#hora_Cita2').val(t1h1);
    });

    $('#btn_t1h2').click(function () {
        //alert("sí estoy funcionando");
        $('#modal_formulario').modal("show");
        $('#fecha_Cita').val(fecha); 
        $('#fecha_Cita2').val(fecha);
        var t1h2 = "11:30 - 13:00";
        $('#hora_Cita').val(t1h2);
        $('#hora_Cita2').val(t1h2);
    });

    $('#btn_t1h3').click(function () {
        //alert("sí estoy funcionando");
        $('#modal_formulario').modal("show");
        $('#fecha_Cita').val(fecha);
        $('#fecha_Cita2').val(fecha); 
        var t1h3 = "13:00 - 14:30";
        $('#hora_Cita').val(t1h3);
        $('#hora_Cita2').val(t1h3);
    });

    $('#btn_t2h1').click(function () {
        //alert("sí estoy funcionando");
        $('#modal_formulario').modal("show");
        $('#fecha_Cita').val(fecha);
        $('#fecha_Cita2').val(fecha);  
        var t2h1 = "16:00 - 17:30";
        $('#hora_Cita').val(t2h1);
        $('#hora_Cita2').val(t2h1);
    });

    $('#btn_t2h2').click(function () {
        //alert("sí estoy funcionando");
        $('#modal_formulario').modal("show");
        $('#fecha_Cita').val(fecha); 
        $('#fecha_Cita2').val(fecha);
        var t2h2 = "17:30 - 19:00";
        $('#hora_Cita').val(t2h2);
        $('#hora_Cita2').val(t2h2);
    });

    $('#btn_t2h3').click(function () {
        //alert("sí estoy funcionando");
        $('#modal_formulario').modal("show");
        $('#fecha_Cita').val(fecha); 
        $('#fecha_Cita2').val(fecha);
        var t2h3 = "19:00 - 20:30";
        $('#hora_Cita').val(t2h3);
        $('#hora_Cita2').val(t2h3);
    });
</script>

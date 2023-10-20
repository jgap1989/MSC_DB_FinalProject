<?php
//INCLUYENDO BASE DE DATOS
include('../controllers/connbdcal.php');

//$conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec"); 


$URL = "http://localhost/ProyectoTallerPintura/ProyectoTallerPintura/calendario/indexcal.php";


//$id_AC = $_POST['id_AC'];
$Nombre_Cliente = $_POST['Nombre_Cliente'];
$Apellido_Cliente = $_POST['Apellido_Cliente'];
$Telefono_Cliente = $_POST['Telefono_Cliente'];
$Servicio_Carro = $_POST['Servicio_Carro'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$title = $Servicio_Carro;
$start = $fecha_cita;
$end = $fecha_cita;

$sentencia = $pdo->prepare('INSERT INTO agendacitas_ac
(/*id_AC,*/Nombre_Cliente,Apellido_Cliente,Telefono_Cliente,Servicio_Carro,fecha_cita,hora_cita,title,start,end, fyh_creacion)
VALUES ( /*:id_AC,*/:Nombre_Cliente,:Apellido_Cliente,:Telefono_Cliente,:Servicio_Carro,:fecha_cita,:hora_cita,:title,:start,:end,:fyh_creacion)');

//$sentencia->bindParam(':id_AC',$id_AC);
$sentencia->bindParam(':Nombre_Cliente',$Nombre_Cliente);
$sentencia->bindParam(':Apellido_Cliente',$Apellido_Cliente);
$sentencia->bindParam(':Telefono_Cliente',$Telefono_Cliente);
$sentencia->bindParam(':Servicio_Carro',$Servicio_Carro);
$sentencia->bindParam(':fecha_cita',$fecha_cita);
$sentencia->bindParam(':hora_cita',$hora_cita);
$sentencia->bindParam(':title',$title);
$sentencia->bindParam(':start',$start);
$sentencia->bindParam(':end',$end);
$sentencia->bindParam('fyh_creacion',$fechaHora);

if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "¡Su cita se ha registrado exitosamente!";
    $_SESSION["icono"] = 'sucess';
    header('Location: '.$URL.'/calendario/indexcal.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Advertencia: Error en el registro";
    $_SESSION["icono"] = 'error';
    header('Location: '.$URL.'/calendario/indexcal.php');
}

/*if($sentencia->execute()){
echo 'success';
//header('Location:' .$URL.'/');
}else{
echo 'error al registrar a la base de datos';
}*/
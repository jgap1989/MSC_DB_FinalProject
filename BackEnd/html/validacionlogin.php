<?php

/*ini_set('display_errors', 'Off');
ini_set('display_startup_errors', 'Off');
error_reporting(O);

$username = $_POST['username'];
$password = $_POST['password'];

function Conectarse()
{
	if(!($link=mysql_connect("127.0.0.1:3307","root")))
	/*if(!($link=mysql_connect("127.0.0.1:3307","root")))*//*
	{
		echo "Error conectando a la base de datos.";
		exit();
	}
	if(!mysql_select_db("ac_bodyshop_tallermec",$link))
	{
		echo "Error seleccionando la base de datos.";
		exit();
	}
	return $link;	
}

	$con = Conectarse();
	$query = "SELECT *  FROM cliente_C WHERE nombre_C = '".$username."' AND contrasena_C = '".$password."'";
	$q = mysql_query($query,$con);
	try{
		
		if(mysql_result($q,O))
		{$result = mysql_result($q,O);
			echo "Usuario validado correctamente.";
		}else
			echo "Usuario o password erroneos.";
		
	}catch(Exception $error){}
	mysql_close($con);*/
	


$username = $_POST['username'];
$password = $_POST['password'];

session_start();
$_SESSION['usename']=$username;

//include('conexiondb.php');
$conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec");

//require_once 'conexion.php';
// se asume conexion en $conn incluido desde conexion.php, ejemlo:
//$conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec");

// añadiría un limit 1 a la consulta pues solo esperamos un registro
//$consulta = mysqli_query ($conn, "SELECT *  FROM cliente_c WHERE nombre_C = '$username' AND contrasena_C = '$password'");  

$consulta="SELECT*FROM cliente_c WHERE nombre_C = '$username' AND contrasena_C = '$password'"; 
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	echo "Usuario registrado.";	
} else {
	echo "Usuario o password incorrectos.";
}

mysqli_free_result($resultado);
mysqli_close($conn);

// esto válida si la consulta se ejecuto correctamente o no
// pero en ningún caso válida si devolvió algún registro
/*if(!$consulta){ 
    // echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " .	
    echo mysqli_error($mysqli);
    // si la consulta falla es bueno evitar que el código se siga ejecutando
    exit;
} 
// este else sobra
//else { 
    //print "Bienvenido"; 
//} 

// validemos pues si se obtuvieron resultados 
// Obtenemos los resultados con mysqli_fetch_assoc
// si no hay resultados devolverá NULL que al convertir a boleano para ser evaluado en el if será FALSE
if($username == mysqli_fetch_assoc($consulta)) {
    // el usuario y la pwd son correctas
	echo "Usuario correcto.";
} else { 
	echo "Usuario erroneo.";
    // Usuario incorrecto o no existe
}

if($password == mysqli_fetch_assoc($consulta)) {
    // el usuario y la pwd son correctas
	echo "Usuario correcto.";
} else { 
	echo "Password erroneo.";
    // Usuario incorrecto o no existe
}*/


?>
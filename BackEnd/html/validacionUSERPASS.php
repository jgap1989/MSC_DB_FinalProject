<?php

$username = $_POST['username'];
$password = $_POST['password'];

session_start();
$_SESSION['usename']=$username;

$conn= mysqli_connect("127.0.0.1:3307", "root", "smgm1304", "ac_bodyshop_tallermec");  

$consulta="SELECT*FROM cliente_c WHERE nickname_C = '$username' AND contrasena_C = '$password'"; 

$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	echo "Usuario registrado.";	
} else {
	echo "Usuario o contraseña incorrectos.";
}

mysqli_free_result($resultado);
mysqli_close($conn);

?>
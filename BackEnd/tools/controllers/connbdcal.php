<?php
//*********CONEXIÓN A LA BASE DE DATOS */
define('APP_NAME','ACE BODY SHOP');
define('SERVIDOR','127.0.0.1:3307');
define('USUARIO','root');
define('PASSWORD','smgm1304');
define('BD','ac_bodyshop_tallermec');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
    //echo "1";
}catch (PDOException $e){
   // print_r($e); imprime el error
    //echo "0";
}

$URL = "http://localhost/ProyectoTallerPintura/ProyectoTallerPintura/html/login.php";

date_default_timezone_set('america/mexico_city');
$fechaHora = date("Y-m-d H:i:s");

/*$pdo = new PDO("mysql:host=127.0.0.1:3307;dbname=ac_bodyshop_tallermec","root","smgm1304");

$dsn = "mysql:host=127.0.0.1:3307;dbname=ac_bodyshop_tallermec;charset=utf8";
$username = "root";
$password = "smgm1304";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

$dsn .= ";auth_plugin=mysql_native_password"; // Agrega esta línea para cambiar el método de autenticación

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}*/


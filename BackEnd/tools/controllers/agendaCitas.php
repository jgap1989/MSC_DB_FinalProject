<?php 
 
include('../controllers/connbdcal.php');

//$sql = "SELECT title,start,end FROM agendacitas_ac";
$sql = "SELECT title,start,end FROM agendacitas_ac";

$query = $pdo->prepare($sql);
$query->execute();

$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

//print_r($resultado);

echo json_encode($resultado);


?>

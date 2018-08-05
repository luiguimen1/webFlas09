<?php
header('Access-Control-Allow-Origin: *');
require '../../Class/Mysql/Datos.php';
require '../../Class/Mysql/ConectarBD.php';

$BD = new ConectarBD();
$sql = "select * from persona;";
$conn = $BD->getMysqli();
$smtp = $conn->prepare($sql);
//$smtp->bind_param("i",$id);
//$id=$_GET["id"];
$smtp->execute();
$data = $smtp->get_result();
$res = array();
$res["success"]="no";
$res["row"]=$data->num_rows;
while ($fila = $data->fetch_assoc()) {
    $res[]=$fila;
    $res["success"]="OK";
}
echo json_encode($res);
$smtp->close();
$conn->close();




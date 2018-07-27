<?php

header('Access-Control-Allow-Origin: *');
require '../../Class/Mysql/Datos.php';
require '../../Class/Mysql/ConectarBD.php';


$BD = new ConectarBD();
$conn = $BD->getMysqli();
$sql = "insert into persona (id, nombre,apellido,telefono,email,fechaNa,cc) values (?,?,?,?,?,?,?)"
        . " ON DUPLICATE KEY UPDATE cc = ?, nombre = ?, apellido = ?, telefono = ?, email = ?, fechaNa = ?;";
$smtp = $conn->prepare($sql);

$json = file_get_contents("php://input");
$json = json_decode($json);



$smtp->bind_param("issssssssssss", $json->id, $json->nombre, $json->apellido, $json->Telefono, $json->Email,$json->fecha, $json->cc, $json->cc, $json->nombre, $json->apellido, $json->Telefono, $json->Email, $json->fecha);





$res = array();
$res["success"] = "no";
if ($smtp->execute()) {
    $res["success"] = "OK";
}

echo json_encode($res);
$smtp->close();
$conn->close();

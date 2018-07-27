<?php
require '../../Class/Mysql/Datos.php';
require '../../Class/Mysql/ConectarBD.php';


$BD = new ConectarBD();
$conn = $BD->getMysqli();
$sql = "delete from persona where id = ?;";
$smtp = $conn->prepare($sql);
$smtp->bind_param("i",$_POST["IdcoD"]);

$res = array();
$res["success"]="no";
if($smtp->execute()){
    $res["success"]="OK";
    $res["id"]=$_POST["IdcoD"];
}
echo json_encode($res);
$smtp->close();
$conn->close();






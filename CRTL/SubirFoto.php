<?php

header('Access-Control-Allow-Origin: *');
require '../Class/Mysql/Datos.php';
require '../Class/Mysql/ConectarBD.php';
$json = json_decode(json_encode($_POST));
$bd = new ConectarBD();
$sql ="update persona set foto =? where cc = ?;";
$nombre=time().".jpg";
$smtp = $bd->Preparar($sql);
$smtp->bind_param("ss",$nombre,$json->cc);
$res = array();
$res["success"]="no";
$res["success"]="sinfoto.jpg";
if($smtp->execute()){
    move_uploaded_file($_FILES["ionicfile"]["tmp_name"],"../img/".$nombre);
    $res["success"]="no";
    $res["success"]=$nombre;
}
$bd->cerrar();
echo json_encode($res);
<?php

if ($_POST) {

    $n1 = $_POST["numero"];
    $n2 = $_POST["limite"];

    $res = array();

    for ($i = 1; $i <= $n2; $i++) {
        $piso = array();
        $piso["n1"] = $n1;
        $piso["n2"] = $i;
        $piso["re"] = ($n1 * $i);
        $res[] = $piso;
    }
    echo json_encode($res);
} else {
    header("location: ../.././");
}
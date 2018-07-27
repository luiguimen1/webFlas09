<?php

class ConectarBD {

    //put your code here
    private $mysqli;

    function __construct() {
        $this->conectar();
    }

    private function conectar() {
        $dato_conn = new Datos();
        $this->mysqli = new mysqli($dato_conn->get_hostname(), $dato_conn->get_usuario(), $dato_conn->get_clave(), $dato_conn->get_DB());
        if ($this->mysqli->connect_errno) {
            return "Falló la conexión a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
            //  exit();
        } else {
            $this->mysqli->query("SET NAMES 'utf8'");
            return "OK";
        }
    }

    /**
     * Metodo que retona el driver de coneccón la BD MYSQL
     * @return type retorna el conector
     */
    function getMysqli() {
        return $this->mysqli;
    }

    /**
     * Metodo que retona la conexción preparada de la BD MYSQL
     * @return type retorna el SMTP
     */
    public function Preparar($sql) {
        $this->smtp = $this->mysqli->prepare($sql);
        return $this->smtp;
    }
    
    /**
     * Meto que retorna la consulta de tipo Select
     */
    public function data() {
        $this->smtp->execute();
        $res = array();
        $data = $this->smtp->get_result();
        $Filas = $data->num_rows;
        $res["success"] = "no";
        while ($fila = $data->fetch_assoc()) {
            $res[] = $fila;
            $res["success"] = "ok";
        }
        $res["row"] = $Filas;
        $this->cerrar();
        echo json_encode($res);
    }
    
    /**
     * Metodo que cierra la conexion con el servidor de MYSQL
     */
    public function cerrar() {
        $this->smtp->close();
        $this->mysqli->close();
    }

    /**
     * Metodo que permite ejecutar Inser, Update Y Delete
     */
    public function Ejecutar() {
        $this->res = array();
        $this->res["success"] = $this->smtp->execute() == 1 ? "ok" : "no";
        $this->cerrar();
        echo json_encode($this->res);
    }
    
    private $res = array();
    /**
     * Ejecutar multiples sentencias SQL
     */
    public function Eje() {
        $this->res[] = $this->smtp->execute();
    }
    
    public function GetRes(){
        echo json_encode($this->res);
    }
}

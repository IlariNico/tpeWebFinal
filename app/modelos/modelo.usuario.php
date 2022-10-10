<?php

class ModeloUsuario{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function obtenerUsuario($nombreUsuario){
        $query=$this->db->prepare("SELECT * FROM `usuarios` WHERE nombre=?");
        $query->execute([$nombreUsuario]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
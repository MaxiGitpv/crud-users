<?php
include "./modelos/conexion.php";

if(!empty($_POST["btnRegistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["password"]) and !empty($_POST["fechaN"])){

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $password = $_POST["password"];
        $fechaN = $_POST["fechaN"];

        $sql=$conexion->query("INSERT INTO users (nombre, apellido, dni, password, fechaN) 
        VALUES ('$nombre', '$apellido', '$dni', '$password', '$fechaN') ");
        if($sql==1){
            echo '<div class="alert alert-success">Registro exitoso.</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar.</div>';
        }
    }else{
        echo '<div class="alert alert-danger">Todos los campos son Obligatorios.</div>';
    }
}

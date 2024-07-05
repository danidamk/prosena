<?php
class Conexion{
    public function getConexion(){
        include("data.php");
        return $conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
    }
}
?>
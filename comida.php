<?php
require 'conexion/database.php'; 
$db = new Database();
$con = $db->conectar();


$usu = $_POST['doc'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$cor = $_POST['cor'];
$tel = $_POST['tel'];
$fec = $_POST['fec'];
$jue = $_POST['jue'];
$comi= $_POST['comi'];



$sql = "INSERT INTO ingreso (Documento, Nombre, Apellido, Correo, Telefono, Fecha_ingreso, Id_juego, Id_comida) 
        VALUES ('$usu', '$nom', '$ape', '$cor', '$tel', '$fec', '$jue', '$comi)";


if ($con->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();
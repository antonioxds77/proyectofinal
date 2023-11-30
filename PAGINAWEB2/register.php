<?php

$user= "root";
$pass="";
$host="localhost";

$connection = mysqli_connect($host,$user,$pass);

$nombre = $_POST["nombre"];
$passw = $_POST["contra"];
$gmail = $_POST["gmail"];

if (!$connection) {
    echo "No se ha podido conectar al servidor";
}else{
    echo "<b><h3>hemos conectado al servidor</h3></b>";
}

$datab ="formulario";

$db = mysqli_select_db($connection,$datab);

$instruccion_SQL = "INSERT INTO registros (nombre,gmail,contra) 
VALUES ('$nombre','$gmail','$passw')";

$resultado = mysqli_query($connection,$instruccion_SQL);

?>
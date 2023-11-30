<?php

$user= "root";
$pass="";
$host="localhost";

$connection = mysqli_connect($host,$user,$pass);

$nombre = $_POST["nombre"];
$passw = $_POST["contra"];

if (!$connection) {
    echo "No se ha podido conectar al servidor";
}else{
    echo "<b><h3>hemos conectado al servidor</h3></b>";
}

$datab ="formulario";

$db = mysqli_select_db($connection,$datab);

$query = mysqli_query($connection,"SELECT nombre, contra FROM registros
WHERE nombre = '".$nombre."' and contra = '".$passw."'");

$nr = mysqli_num_rows($query);

if ($nr == 1) {
    echo "Bievenido".$nombre;
}else if($nr == 0){
    echo "No se ingreso correctamente";
}
?>

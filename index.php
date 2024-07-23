<?php include 'Model/conexionBD.php';

$conexion = AbrirBaseDatos();
if ($conexion) {
} 
else {
    echo "Error al conectar a la base de datos.";
}

header("location: View/home.php");

?>
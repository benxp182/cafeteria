<?php 

include("db.php");

if(isset($_GET['ID'])){
    $id = $_GET['ID'];

    $registrar = "DELETE FROM producto WHERE ID = $id";

    $resultado = mysqli_query($conexion, $registrar);

    if (!$resultado) {
        die("error al eliminiar");
    }
    header('Location: index.php');
}
?>
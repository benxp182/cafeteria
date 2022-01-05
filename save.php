<?php  

    include('db.php');

    if (isset($_POST['save_task'])) {
    $nombre=$_POST ['Nombre'];
    $referencia=$_POST ['Referencia'];
    $precio=$_POST ['Precio'];
    $peso=$_POST ['Peso'];
    $categoria=$_POST ['Categoria'];
    $stock=$_POST ['Stock'];
    $fecha=$_POST ['Fecha'];
  
    $registrar="INSERT INTO `producto` (`Nombre`, `Referencia` , `Precio` , `Peso`, `Categoria` , `Stock` , `Fecha`) VALUES ('$nombre', '$referencia' , '$precio' , '$peso', '$categoria' , '$stock' , '$fecha')";
   
    $resultado=mysqli_query($conexion, $registrar);
    
    if(!$resultado) {
        die("error en guardado");
      }

      header('Location: index.php');
    }
?>

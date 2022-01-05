<?php

include("db.php");

if(isset($_GET['ID'])){
    $id = $_GET['ID'];

    $registrar = "SELECT * FROM producto WHERE ID = $id";
    $resultado = mysqli_query($conexion, $registrar);
    if(mysqli_num_rows($resultado) == 1){
        $row = mysqli_fetch_array($resultado);
        $nombre=$row ['Nombre'];
        $referencia=$row ['Referencia'];
        $precio=$row ['Precio'];
        $peso=$row ['Peso'];   
        $categoria=$row ['Categoria'];
        $stock=$row ['Stock'];
        $fecha=$row ['Fecha'];
    }

}

if(isset($_POST['Actualizar'])){
    $id = $_GET['ID'];
    $nombre=$_POST ['Nombre'];
    $referencia=$_POST ['Referencia'];
    $precio=$_POST ['Precio'];
    $peso=$_POST ['Peso'];   
    $categoria=$_POST ['Categoria'];
    $stock=$_POST ['Stock'];
    $fecha=$_POST ['Fecha'];

    $registrar = "UPDATE producto set Nombre = '$nombre' , Referencia = '$referencia' , Precio = '$precio' , Peso = '$peso' , Categoria = '$categoria' , Stock = '$stock' , Fecha = '$fecha' WHERE ID = $id";
    mysqli_query($conexion, $registrar);
    header("Location: index.php");
}
?>

<?php include("include/header.php")?>

<div class=container p-4>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?ID=<?php echo $_GET['ID'];?>" method="POST">
                    <div class="form-group">
                        <input type="varchar" name="Nombre" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Nombre">
                    </div>
                    <div class="form-gruop">
                    <input type="varchar" name="Referencia" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Referencia">
                    </div>
                    <div class="form-gruop">
                    <input type="int" name="Precio" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Precio">
                    </div>
                    <div class="form-gruop">
                    <input type="int" name="Peso" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Peso">
                    </div>
                    <div class="form-gruop">
                    <input type="int" name="Categoria" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Categoria">
                    </div>
                    <div class="form-gruop">
                    <input type="int" name="Stock" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Stock">
                    </div>
                    <div class="form-gruop">
                    <input type="int" name="Fecha" value="<?php echo $nombre; ?>" class="form.control" placeholder="Actualiza Fecha">
                    </div>
                    <button class="btn btn-success" name="Actualizar">Actualizar</button>
                </form>
            </div>
    </div>
</div>

<?php include("include/footer.php")?>
<?php
include("db.php"); ?>

<?php 
include("include/header.php");?>

<!-- contenedor de bostrap que centra el contenido Seccion de formulario y tabla-->
<div class="container p-4">
<!-- fila-->
    <div class="row">
    <!-- Formulario-->
        <div class="col-md-4"> 
            <div class="card card-body"><!--Tarjeta de boostrap-->
            <form action="save.php" method="POST"> <!--form action="archivo donde lo envia" method="envia los datos del formulrio"-->
                <div class="form-group"><!--etiqueta nombre-->
                    <input type="varchar" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
                </div>
                <div class="form-group">
                    <input type="varchar" name="Referencia" class="form-control" placeholder="Referencia" autofocus>
                </div>
                <div class="form-group">
                    <input type="int" name="Precio" class="form-control" placeholder="Precio" autofocus>
                </div>
                <div class="form-group">
                    <input type="int" name="Peso" class="form-control" placeholder="Peso" autofocus>
                </div>
                <div class="form-group">
                    <input type="varchar" name="Categoria" class="form-control" placeholder="Categoria" autofocus>
                </div>
                <div class="form-group">
                    <input type="int" name="Stock" class="form-control" placeholder="Stock" autofocus>
                </div>
                <div class="form-group">
                    <input type="date" name="Fecha" class="form-control" placeholder="Fecha" autofocus>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="Guardar" value="Guardar">          
                </div> 
            </form>
        </div>  
         
       <!--Tabla-->
        <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Fecha</th>
                <th>Acciones</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            $registrar = "SELECT * FROM producto";
            $resul_prod = mysqli_query($conexion, $registrar);

            while($row = mysqli_fetch_array($resul_prod)) { ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><?php echo $row['Referencia']; ?></td>
                    <td><?php echo $row['Precio']; ?></td>
                    <td><?php echo $row['Peso']; ?></td>
                    <td><?php echo $row['Categoria']; ?></td>
                    <td><?php echo $row['Stock']; ?></td>
                    <td><?php echo $row['Fecha']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['ID']?>" class="btb btn-secondary"><i class="fas fa-marker"></i></a>
                        <a href="delete.php?id=<?php echo $row['ID']?>" class="btb btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

                <?php  }  ?>
        </tbody>
    </table>
    </div>
</div>

<?php 
include("include/footer.php");?>


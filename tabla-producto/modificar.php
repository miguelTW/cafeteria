<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFETERIA MÁSTERS</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="/estilos-menu - copia.css">
    <link rel="icon" type="image/.jpg" href="/tabla-empleado/IMG/ougi.png">
</head>
<body>
    <?php
        //Declara variable id
        $id=$_REQUEST['id'];
        //Hace conexión con la base de datos
        include("conexion.php");
        //Selecciona la ID de la tabla usuarios para modificar a partir de ella
        $query="SELECT * FROM producto WHERE producto_id='$id'";
        $resultado= $conexion->query($query);
        $row=$resultado->fetch_assoc();
        ?>
    <form action="modificar_proceso.php?id=<?php echo $row['producto_id']; ?>" method="POST" class="formulario">
        <h1 class="formulario__titulo"> Ingrese los Datos del Producto</h1>
            
        <input type="text" required name="nombre" class="formulario__input"  value="<?php echo $row['nombre']; ?>" />
        <laber class="formulario__label">Nombre</laber>
        <input type="number" required name="precio" class="formulario__input" value="<?php echo $row['precio']; ?>" />
        <laber class="formulario__label">Precio</laber>
        <input type="text" required name="descripcion" class="formulario__input" value="<?php echo $row['descripcion']; ?>" />
        <laber class="formulario__label">Descripción</laber>
        
        <input type="submit" class="formulario__submit">
    </form>
    <script src="form.js"></script>
    <div id="header">
            <ul class="nav">
                <li><a href="/menu.html"><p class="p"> Inicio</p></a></li>
            </ul>
        </div>

</body>
</html>
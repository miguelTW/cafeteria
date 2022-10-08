<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE WAIFUS PROYECT PHP</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/.jpg" href="/tabla-empleado/IMG/ougi.png">
</head>
<body>
  
    <?php
      //Declara variable id
      $id=$_REQUEST['id'];
      //Hace conexión con la base de datos
      include("conexion.php");
      //Selecciona la ID de la tabla usuarios para modificar a partir de ella
      $query="SELECT * FROM empleado WHERE empleado_id='$id'";
      $resultado= $conexion->query($query);
      $row=$resultado->fetch_assoc();
    ?>

      <!--Hace conexión con el proceso de moficiar-->
    <form action="modificar_proceso.php?id=<?php echo $row['empleado_id']; ?>" method="POST" class="formulario">
      <!--Inputs anteriormente escritos a modificar-->
      <h1 class="formulario__titulo"> Modificar Datos Empleado</h1>
      <input type="text" required name="nombre" class="formulario__input"  value="<?php echo $row['nombre']; ?>" />
      <laber class="formulario__label">Nombre</laber>

      <input type="text" required name="apellido" class="formulario__input" value="<?php echo $row['apellido']; ?>" />
      <laber class="formulario__label">Apellido</laber>

      <input type="number" required name="edad" class="formulario__input" value="<?php echo $row['edad']; ?>" />
      <laber class="formulario__label">Edad</laber>

      <input type="text" required name="direccion" class="formulario__input"  value="<?php echo $row['direccion']; ?>" />
      <laber class="formulario__label">Direccion</laber>

      <input type="text" required name="telefono" class="formulario__input"  value="<?php echo $row['telefono']; ?>" />
      <laber class="formulario__label">Telefono</laber>

      <input type="text" required name="puesto" class="formulario__input"  value="<?php echo $row['puesto']; ?>" />
      <laber class="formulario__label">Puesto</laber>

      <input type="submit" class="formulario__submit" value="Aceptar" />
    </form>
    <script src = "form.js" ></script>
</body>
</html>

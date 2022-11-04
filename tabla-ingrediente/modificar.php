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
      $query="SELECT * FROM ingredientes WHERE ingrediente_id='$id'";
      $resultado= $conexion->query($query);
      $row=$resultado->fetch_assoc();
    ?>

      <!--Hace conexión con el proceso de moficiar-->
    <form action="modificar_proceso.php?id=<?php echo $row['ingrediente_id']; ?>" method="POST" class="formulario">
      <!--Inputs anteriormente escritos a modificar-->
      <h1 class="formulario__titulo"> Modificar Datos Ingrediente</h1>
      <input type="text" required name="nombre" class="formulario__input"  value="<?php echo $row['nombre']; ?>" />
      <laber class="formulario__label">Nombre</laber>

      <input type="number" required name="existencias" class="formulario__input" value="<?php echo $row['existencias']; ?>" />
      <laber class="formulario__label">Existencias</laber>

      <input type="number" required name="total_vendido" class="formulario__input" value="<?php echo $row['total_vendido']; ?>" />
      <laber class="formulario__label">Total Vendido</laber>

      <select required name="unidad_medida" class="formulario__input" >
            <option value="<?php $row["unidad_medida"]?>"> <?php echo $row["unidad_medida"]?></option>
            <option value="kilogramo(s)">Kilogramo(s)</option>
            <option value="Litro(s)">Litro(s)</option>    
        </select>
        <laber class="formulario__label">Selecciona Medida: </laber>

      <input type="submit" class="formulario__submit" value="Aceptar" />
    </form>
    <script src = "form.js" ></script>
</body>
</html>

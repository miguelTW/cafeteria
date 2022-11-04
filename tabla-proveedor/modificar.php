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
      $query="SELECT * FROM proveedor WHERE proveedor_id='$id'";
      $resultado= $conexion->query($query);
      $row=$resultado->fetch_assoc();
    ?>

      <!--Hace conexión con el proceso de moficiar-->
    <form action="modificar_proceso.php?id=<?php echo $row['proveedor_id']; ?>" method="POST" class="formulario">
      <!--Inputs anteriormente escritos a modificar-->
      <h1 class="formulario__titulo"> Modificar Datos Proveedor</h1>
      <input type="text" required name="nombre" class="formulario__input"  value="<?php echo $row['nombre']; ?>" />
      <laber class="formulario__label">Nombre</laber>

      <input type="text" required name="apellido" class="formulario__input" value="<?php echo $row['apellido']; ?>" />
      <laber class="formulario__label">Apellido</laber>

      <input type="text" required name="telefono" class="formulario__input"  value="<?php echo $row['telefono']; ?>" />
      <laber class="formulario__label">Telefono</laber>

      <select class="formulario__input" required name="ingrediente_id" >
            <option value="<?php $row["ingrediente_id"]?>"> <?php echo  "ID: " .$row["ingrediente_id"]?></option>
            <?php
                include("conexion.php");
                $query = "SELECT * FROM Ingredientes; ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["ingrediente_id"]."'>" . "ID: " . $row["ingrediente_id"] . "" . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione el Ingrediente: </laber>

      <input type="submit" class="formulario__submit" value="Aceptar" />
    </form>
    <script src = "form.js" ></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/.jpg" href=" ">
</head>
<body>

    <!--<h1 class="formulario__titulo"> Altas, bajas y modificación de registros UwU</h1>s-->

    <form action="apellido.php" method="POST" class="formulario">
        <select class="formulario__input" required name="apellido" >
            <?php
                include("conexion.php");
                $query = "SELECT DISTINCT apellido FROM empleado; ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["apellido"]."'>" . $row["apellido"] . "" . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione el Apellido: </laber>
        <input type="submit" class="formulario__submit">
    </form>
    <!--<script src="form.js"></script>-->
</body>
</html>
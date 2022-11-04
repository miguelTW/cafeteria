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

    <form action="operacion_guardar.php" method="POST" class="formulario">
        <h1 class="formulario__titulo"> Ingrese los Datos del Producto</h1>

        <?php
            include("conexion.php");
            
            $query = " SELECT producto_id FROM producto ORDER BY producto_id DESC LIMIT 1;";
            $n =1;
            $nn = "ID";
            $query_result = mysqli_query($conexion,$query);
            
            if (mysqli_num_rows($query_result) > 0) {
                while($row = mysqli_fetch_array($query_result)){
                    //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                    echo $nn . $row["producto_id"] + $n;
                }
            } else {
                echo $nn . " " . "0 results- este no";

            }
            ?>
        <div id="id"></div>

        <input type="text" required name="nombre" class="formulario__input">
        <laber class="formulario__label">Nombre</laber>
        <input type="number" required name="precio" class="formulario__input">
        <laber class="formulario__label">Precio</laber>
        <input type="text" required name="descripcion" class="formulario__input">
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
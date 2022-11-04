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
        <h1 class="formulario__titulo"> Ingrese los Datos de la Venta</h1>

<!--///////////////////////////////////////////////////////////////////////////////////////////       --> 
        <?php
            include("conexion.php");
            
            $query = " SELECT venta_id FROM ventas ORDER BY venta_id DESC LIMIT 1;";
            $n =1;
            $query_result = mysqli_query($conexion,$query);
            
            if (mysqli_num_rows($query_result) > 0) {
                while($row = mysqli_fetch_array($query_result)){
                    //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                    echo  $row["venta_id"] + $n;
                }
            } else {
                echo "0 results- este no";

            }
            ?>
<!--///////////////////////////////////////////////////////////////////////////////////////////       --> 

        <input type="datetime-local" required name="fecha" class="formulario__input">
        <laber class="formulario__label">Fecha</laber>
        
        <select class="formulario__input" required name="empleado_id" >
            <?php
                include("conexion.php");
                $query = "SELECT * FROM empleado WHERE puesto='Cajero';  ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["empleado_id"]."'>" . "ID: " . $row["empleado_id"] . " ". $row["nombre"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione el Empleado: </laber>

        <input type="number" required name="cantidad_producto" class="formulario__input">
        <laber class="formulario__label">Cantidad de Productos</laber>
        <input type="number" required name="total_venta" class="formulario__input">
        <laber class="formulario__label">Total Venta</laber>

        
        <input type="submit" class="formulario__submit">
    </form>
    <!--<script src="form.js"></script>-->
    <div id="header">
            <ul class="nav">
                <li><a href="/menu.html"><p class="p"> Inicio</p></a></li>
            </ul>
        </div>

</body>
</html>
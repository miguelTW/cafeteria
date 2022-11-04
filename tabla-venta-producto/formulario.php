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
            
            $query = " SELECT venta_producto_id FROM venta_producto ORDER BY venta_producto_id DESC LIMIT 1;";
            $n =1;
            $query_result = mysqli_query($conexion,$query);
            
            if (mysqli_num_rows($query_result) > 0) {
                while($row = mysqli_fetch_array($query_result)){
                    //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                    echo  $row["venta_producto_id"] + $n;
                }
            } else {
                echo "0 results- este no";

            }
            ?>
<!--///////////////////////////////////////////////////////////////////////////////////////////       --> 
        
        <select class="formulario__input" required name="venta_id" >
            <?php
                include("conexion.php");
                $query = "SELECT * FROM ventas;  ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["venta_id"]."'>" . "ID: " . $row["venta_id"] . "". "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione la Venta: </laber>
        
        <select class="formulario__input" required name="producto_id" >
            <?php
                include("conexion.php");
                $query = "SELECT * FROM producto;  ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["producto_id"]."'>" . "ID: " . $row["producto_id"] . " ". $row["nombre"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione el producto: </laber>
        <input type="number" required name="cantidad" class="formulario__input">
        <laber class="formulario__label">Cantidad de Productos</laber>

        
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
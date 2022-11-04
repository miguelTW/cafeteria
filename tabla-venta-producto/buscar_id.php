<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="/estilos-menu - copia.css">
    <link rel="icon" type="image/.jpg" href=" ">
</head>
<body>

    <!--<h1 class="formulario__titulo"> Altas, bajas y modificación de registros UwU</h1>s-->

    <form action="id.php" method="POST" class="formulario">
        <select class="formulario__input" required name="venta_producto_id" >
            <?php
                include("conexion.php");
                $query = "SELECT * FROM venta_producto; ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["venta_producto_id"]."'>" . "ID: " . $row["venta_producto_id"] . "" . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione el ID: </laber>
        <input type="submit" class="formulario__submit">
    </form>
    <div id="header">
			<ul class="nav">
				<li><a href="/menu.html"><p class="p"> Inicio</p></a></li>
			</ul>
		</div>
    <!--<script src="form.js"></script>-->
</body>
</html>
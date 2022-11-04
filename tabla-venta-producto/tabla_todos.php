<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="icon" type="image/.jpg" href="]/tabla-empleado/IMG/ougi.png">
    <link rel="stylesheet" href="tabla-stilos.css">
    <link rel="stylesheet" href="/estilos-menu - copia.css">
</head>
<body>

    <!--DECLARAMOS LA TABLA DONDE IRÁ LA INFORMACIÓN DE LA TABLA CLIENTES BD-->
    <table >
        <tr>
            <th colspan="5">Tabla Venta-Producto (Productos Vendidos)</th>

        </tr>
        <tbody>
                <tr>
                    <th>Venta-Producto ID</th>
                    <th>Venta ID</th>
                    <th>Producto ID</th>
                    <th>Cantidad del Producto</th>
                </tr>
            <?php
            //Hace conexión con la base de datos
                include("conexion.php");
            //Básicamente, selecciona la tabla usuarios para pasarla a nuestra tabla en PHP
                $query="SELECT * FROM venta_producto";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>

                <tr>
                <td><?php echo $row['venta_producto_id']; ?></td>
                <td><?php echo $row['venta_id']; ?></td>
                <td><?php echo $row['producto_id']; ?></td>
                <td><?php echo $row['cantidad']; ?></td>

                </tr>
            <?php
                }
            ?>

            </tbody>
    </table>

    <div id="header">
			<ul class="nav">
				<li><a href="/menu.html"><p class="p"> Inicio</p></a></li>
			</ul>
		</div>
</body>
</html>
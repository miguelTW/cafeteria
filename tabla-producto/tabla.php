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
        <tbody>
                <tr>
                    <th>Producto ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Operación</th>
                </tr>
            <?php
            //Hace conexión con la base de datos
                include("conexion.php");
            //Básicamente, selecciona la tabla usuarios para pasarla a nuestra tabla en PHP
                $query="SELECT * FROM producto";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>

                <tr>
                <td><?php echo $row['producto_id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>

                <!--Se crea un href para los botones Modificar y Eliminar-->
                <td><a href="modificar.php?id=<?php echo $row['producto_id']; ?>">Modificar</a></td>

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
<?php
//Hace conexión con la base de datos
include("conexion.php");
//Hace la variable "id"
$venta_id= $_POST['venta_id'];
//Selecciona a usuarios a partir de la ID para evitar borrar en cuyo caso haya datos repetidos (ya que la ID no se repite)

//  AQUI VA EL JOIN DE LA COMBINACION DE TODAS LAS TABLAS
$query="SELECT * FROM venta_producto WHERE venta_producto_id='$venta_producto_id'";
  //Acá nos dice básicamente que si todo sale bien nos va a llevar a la tabla donde vamos a ver que el usuario se eliminó con exito
    $resultado= $conexion->query($query);
    if($resultado){
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset=" border: 0px ;UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factura</title>
        <link rel="stylesheet" href="/ticket/index.css">
        <Link rel="icon" type="Image/png" Href="ticket\IMAGE\bort.png">
    </head>
<body>
<div id="general">
        
        <div id="izquierda">
            <img class="imagen" src="/ticket/IMAGE/kiyotaka 1.jpg" alt="photo profile" width="250">
            <br><br><br>
            <h2 class="h2">
                Cafetería Másters <br><br>
            </h2>
            <!--**********************************************************************************-->
            <table style="width:100%" >
                <tr>
                    <th colspan="3">Ticket de Compra</th>
                </tr>
                <tr>
                    <td colspan="3"> <br></td>
                </tr>
                <tbody>
                        <tr>
                            <th colspan="1">Num. de Ticket:</th>
                            <td colspan="2"> Ticket</td>
                        </tr>
                        <tr>
                            <th colspan="1">Fecha:</th>
                            <td colspan="2"> Ticket</td>
                        </tr>
                        <tr>
                            <td colspan="3"> <br></td>
                        
                        </tr>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td>Producto</td>
                            <td>Cantidad </td>
                            <td>Precio</td>
                        </tr>
                        <tr>
                            <td colspan="3"> <br></td>
                        </tr>
                        <tr>
                            <th>Cantidad Total:</th>
                            <td colspan="2">Cantidad</td>
                        </tr>
                        <tr>
                            <th>Total a Pagar:</th>
                            <td colspan="2">Cantidad</td>
                        </tr>
                        <tr>
                            <td colspan="3"> <br></td>
                        </tr>
                        <tr>
                            <th>Codigo:</th>
                            <td colspan="2">codigo</td>
                        </tr>
        
                    </tbody>
            </table>
            <!--**********************************************************************************-->
        </div>

    </div>
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
<?php

}
  //Si la conexión falla nos aparecerá el siguiente error  
else{
    echo "Aún No hay Productos ";
}

?>

<body>

    <div id="general">
        
        <div id="izquierda">
            <img class="imagen" src="/ticket/IMAGE/kiyotaka 1.jpg" alt="photo profile" width="250">
            <br><br><br>
            <h2 class="h2">
                Cafetería Másters
            </h2>
            <!--**********************************************************************************-->
            <table style="width:100%" >
                <tr>
                    <th colspan="3">Ticket de Compra</th>
                </tr>
                <tr>
                    <td colspan="3"> <br></td>
                </tr>
                <tbody>
                        <tr>
                            <th colspan="1">Num. de Ticket:</th>
                            <td colspan="2"> Ticket</td>
                        </tr>
                        <tr>
                            <th colspan="1">Fecha:</th>
                            <td colspan="2"> Ticket</td>
                        </tr>
                        <tr>
                            <td colspan="3"> <br></td>
                        
                        </tr>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td>Producto</td>
                            <td>Cantidad </td>
                            <td>Precio</td>
                        </tr>
                        <tr>
                            <td colspan="3"> <br></td>
                        </tr>
                        <tr>
                            <th>Cantidad Total:</th>
                            <td colspan="2">Cantidad</td>
                        </tr>
                        <tr>
                            <th>Total a Pagar:</th>
                            <td colspan="2">Cantidad</td>
                        </tr>
                        <tr>
                            <td colspan="3"> <br></td>
                        </tr>
                        <tr>
                            <th>Codigo:</th>
                            <td colspan="2">codigo</td>
                        </tr>
        
                    </tbody>
            </table>
            <!--**********************************************************************************-->
        </div>

    </div>
</body>
</html>
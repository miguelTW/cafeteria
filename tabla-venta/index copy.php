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
                    <th colspan="5">Ticket de Compra</th>
                </tr>
                <tr>
                    <td colspan="5"> <br></td>
                </tr>
                <tbody>

                    <?php
                        //Hace conexión con la base de datos
                        $id=$_REQUEST['id'];
                        include("conexion.php");

                        $query="SELECT
                                v.venta_id as XXTicket,
                                v.fecha as XXFecha,
                                e.nombre as XXEmpleado,
                                e.empleado_id as XXID,
                                p.nombre as XXProducto,
                                vp.cantidad as XXCantidad,
                                p.precio as XXPrecio,
                                v.cantidad_producto as XXCantidadProductos,
                                v.total_venta as XXTotal_apagar

                                from ventas v
                                inner join venta_producto vp on v.venta_id=vp.venta_id
                                inner join producto p on vp.producto_id=p.producto_id 
                                inner join empleado e on e.empleado_id=v.empleado_id where v.venta_id='$id';";

                                $resultado= $conexion->query($query);
                                $row=$resultado->fetch_assoc();
                    ?>
                            <tr>
                                <th colspan="1">Num. de Ticket:</th>
                                <td colspan="4"><?php echo $row['XXTicket'] ; ?></td>
                            </tr>

                            <tr>
                                <th colspan="1">Fecha:</th>
                                <td colspan="4"><?php echo $row['XXFecha']; ?></td>
                            </tr>
                        <tr>
                            <td colspan="5"> <br></td>
                        </tr>
                        <tr>
                            <th colspan="3">Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                        
                        <?php
                            $id=$_REQUEST['id'];
                            include("conexion.php");
    
                            $query="SELECT
                                    v.venta_id as XXTicket,
                                    v.fecha as XXFecha,
                                    e.nombre as XXEmpleado,
                                    e.empleado_id as XXID,
                                    p.nombre as XXProducto,
                                    vp.cantidad as XXCantidad,
                                    p.precio as XXPrecio,
                                    v.cantidad_producto as XXCantidadProductos,
                                    v.total_venta as XXTotal_apagar
    
                                    from ventas v
                                    inner join venta_producto vp on v.venta_id=vp.venta_id
                                    inner join producto p on vp.producto_id=p.producto_id 
                                    inner join empleado e on e.empleado_id=v.empleado_id where v.venta_id='$id';";
    
                                    $resultado= $conexion->query($query);
                            while($row=$resultado->fetch_assoc()){
                            ?>
                            <tr>
                            <td colspan="3"><?php echo $row['XXProducto']; ?></td>
                            <td colspan="1"><?php echo $row['XXCantidad']; ?></td>
                            <td colspan="1"><?php echo $row['XXPrecio']; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        
                        <tr>
                            <td colspan="5"> <br></td>
                        </tr>

                        <?php
                        //Hace conexión con la base de datos
                        $id=$_REQUEST['id'];
                        include("conexion.php");

                        $query="SELECT
                                v.venta_id as XXTicket,
                                v.fecha as XXFecha,
                                e.nombre as XXEmpleado,
                                e.empleado_id as XXID,
                                p.nombre as XXProducto,
                                vp.cantidad as XXCantidad,
                                p.precio as XXPrecio,
                                v.cantidad_producto as XXCantidadProductos,
                                v.total_venta as XXTotal_apagar

                                from ventas v
                                inner join venta_producto vp on v.venta_id=vp.venta_id
                                inner join producto p on vp.producto_id=p.producto_id 
                                inner join empleado e on e.empleado_id=v.empleado_id where v.venta_id='$id';";

                                $resultado= $conexion->query($query);
                                $row=$resultado->fetch_assoc();
                    ?>

                        <tr>
                            <th>Cantidad Total:</th>
                            <td colspan="4"><?php echo $row['XXCantidad']; ?></td>
                        </tr>
                        <tr>
                            <th>Total a Pagar:</th>
                            <td colspan="4"><?php echo $row['XXTotal_apagar']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="5"> <br></td>
                        </tr>
                        <tr>
                            <th>Codigo:</th>
                            <?php
                            $caracteres_permitidos = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            $longitud = 10;
                            ?>
                            <td colspan="4"><?php echo substr(str_shuffle($caracteres_permitidos), 0, $longitud);?></td>
                        </tr>


                    </tbody>
            </table>
            <!--**********************************************************************************-->
        </div>
        
    </div>
    
    <div id="header">
            <ul class="nav">
                <li><a href="/menu.html"><p class="p"> Inicio</p></a></li>
            </ul>
    </div>
    <div id="header">
            <ul class="nav">
                <li><a href="/pdf/crearPdf.php "><p class="p"> Descargar</p></a></li>
            </ul>
    </div>
</body>
</html>    
<?php


?>

</body>
</html>
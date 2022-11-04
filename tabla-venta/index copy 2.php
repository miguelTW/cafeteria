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
            
                        <?php
                        //Hace conexión con la base de datos
                            include("conexion.php");
                        //Básicamente, selecciona la tabla usuarios para pasarla a nuestra tabla en PHP
                        
                        //$id=$_REQUEST['id'];

                        $query="SELECT 
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
                                inner join empleado e on e.empleado_id=v.empleado_id where v.venta_id='2';";
                                //inner join empleado e on e.empleado_id=v.empleado_id where v.venta_id='$id';";
                            $resultado= $conexion->query($query);

                            while($row=$resultado->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['XXFecha']; ?></td>
                            </tr>
                                

                            <?php
                            }
                            ?>

        </div>

    </div>
  
</body>
</html>    
<?php


?>

</body>
</html>
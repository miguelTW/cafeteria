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
        <h1 class="formulario__titulo"> Ingrese los Datos del Proveedor</h1>

        <?php
            include("conexion.php");
            
            $query = " SELECT proveedor_id FROM proveedor ORDER BY proveedor_id DESC LIMIT 1;";
            $n =1;
            $query_result = mysqli_query($conexion,$query);
            
            if (mysqli_num_rows($query_result) > 0) {
                while($row = mysqli_fetch_array($query_result)){
                    //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                    echo  $row["proveedor_id"] + $n;
                }
            } else {
                echo "0 results- este no";

            }
            ?>

        <input type="text" required name="nombre" class="formulario__input">
        <laber class="formulario__label">Nombre</laber>
        <input type="text" required name="apellido" class="formulario__input">
        <laber class="formulario__label">Apellido</laber>
        <input type="text" required name="telefono" class="formulario__input">
        <laber class="formulario__label">Telefono</laber>

        <select class="formulario__input" required name="ingrediente_id" >
            <?php
                include("conexion.php");
                $query = "SELECT * FROM Ingredientes; ";

                $query_result = mysqli_query($conexion,$query);
                
                if (mysqli_num_rows($query_result) > 0) {
                    while($row = mysqli_fetch_array($query_result)){
                        //EN ESTA LINEA VAN LAS ACCIONES A REALIZAR LO QUE PIDE "$query"
                        echo "<option value = '".$row["ingrediente_id"]."'>" . "ID: " . $row["ingrediente_id"] . "" . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </select>
        <laber class="formulario__label">Seleccione el Ingrediente: </laber>
        
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
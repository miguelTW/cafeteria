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
        <h1 class="formulario__titulo"> Ingrese los Datos del Ingrediente</h1>
        <input type="text" required name="nombre" class="formulario__input">
        <laber class="formulario__label">Nombre</laber>
        <input type="number" required name="existencias" class="formulario__input">
        <laber class="formulario__label">Existencias</laber>
        <input type="number" required name="total_vendido" class="formulario__input">
        <laber class="formulario__label">Total Vendido</laber>

        <select class="formulario__input" required name="unidad_medida" >
            <option value="kilogramo(s)">Kilogramo(s)</option>
            <option value="Litro(s)">Litro(s)</option>    
        </select>
        <laber class="formulario__label">Selecciona Medida: </laber>

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
<?php
  //Hace conexión con la base de datos
  include("conexion.php");
  //Declara las variables
  $empleado_id= $_REQUEST['id'];
  $nombre= $_POST['nombre'];
  $apellido= $_POST['apellido'];
  $edad= $_POST['edad'];
  $direccion= $_POST['direccion'];
  $telefono= $_POST['telefono'];
  $puesto= $_POST['puesto'];
  

  //Acá nos dice básicamente: reemplaza los datos de la tabla "usuarios" donde el dato "nombre" sea "$nombre"(la variable que creeamos arriba, osea, que se reemplazara por esta, lo mismo con los demás.)
  $query="UPDATE empleado SET nombre='$nombre', apellido='$apellido', edad='$edad', direccion='$direccion', telefono='$telefono', puesto='$puesto'  WHERE empleado_id='$empleado_id'";
  $resultado= $conexion->query($query);
  //Si tiene exito nos llevara a tabla.php donde estaran los datos modificados
  if($resultado){
    header("Location: tabla.php");
  }
  //Sino nos dará el siguiente error
  else{
    echo "Insercion no exitosa";
  }
?>

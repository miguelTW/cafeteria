<?php
  //Hace conexión con la base de datos
  include("conexion.php");
  //Declara las variables
  $ingrediente_id= $_REQUEST['id'];
  $nombre= $_POST['nombre'];
  $existencias= $_POST['existencias'];
  $total_vendido= $_POST['total_vendido'];
  $unidad_medida= $_POST['unidad_medida'];
  
  //Acá nos dice básicamente: reemplaza los datos de la tabla "usuarios" donde el dato "nombre" sea "$nombre"(la variable que creeamos arriba, osea, que se reemplazara por esta, lo mismo con los demás.)
  $query="UPDATE ingredientes SET nombre='$nombre', existencias='$existencias', total_vendido='$total_vendido', unidad_medida='$unidad_medida'  WHERE ingrediente_id='$ingrediente_id'";
  $resultado= $conexion->query($query);
  //Si tiene exito nos llevara a tabla.php donde estaran los datos modificados
  if($resultado){
    header("Location: /menu.html");
  }
  //Sino nos dará el siguiente error
  else{
    echo "Insercion no exitosa";
  }
?>

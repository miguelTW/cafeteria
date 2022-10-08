<?php
    #NOMBRE DEL SERVIDOR
    $db_hosts = 'localhost';
    #NOMBRE DE LA BASE DE DATOS
    #$db_name = 'projecto';
    $db_name = 'cafeteria';
    #NOMBRE DEL USUARIO
    $db_user = 'root';
    #CONTRASEÑA DEL USUARIO
    #$db_pass = '1234';
    $db_pass = '12345';

    #LA FECHA EN LA QUE SE CREÓ EL RESPALDO
    $fecha = date("ymd-his");

    #INDICAR EL NOMBRE DEL RESPALDO
    $salida_sql = $db_name . '_' . $fecha . '_' . '.slq';

    #VARIABLE QUE VA A TENER LAS INSTRUCCIONES
    $dump = "mysqldump  -h$db_hosts  -u$db_user -p$db_pass --opt $db_name > $salida_sql";
    #'>' ES PARA DECIR QUE LA VAMOS A GUARDAR EN SALIDA

    #ES PARA QUE NOS MUESTRE LA EJECUCUION DEL COMANDO
    system($dump, $output);

    #CONVIRTIREMOS EL ARCHIVO EN UN '.ZIP'
    $zip = new ZipArchive();
    
    $salida_zip = $db_name . '_' . $fecha .'_' . '.zip';

    if ($zip->open($salida_zip,ZIPARCHIVE::CREATE) === TRUE){
        $zip->addfile($salida_sql);
        $zip->close();
        unlink($salida_sql);

        header("Location: $salida_zip");
    } else{
        echo 'error';
    }
    
?>
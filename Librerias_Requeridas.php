<?php 
            
    echo"<LINK REL='STYLESHEET' HREF='/Librerias/General/Estilos_v5.css' />";
    if(file_exists($_SERVER["DOCUMENT_ROOT"].'/Librerias/Paquetes/Librerias_basic_run_php.php')){
        include_once($_SERVER["DOCUMENT_ROOT"].'/Librerias/Paquetes/Librerias_basic_run_php.php');
    }elseif(file_exists($_SERVER["DOCUMENT_ROOT"].'/Librerias/Gestor_librerias.php')){
        include_once($_SERVER["DOCUMENT_ROOT"].'/Librerias/Gestor_librerias.php');
    }else{
        echo"Paquete De Librerias no encontrados";
    }
    include_once($_SERVER["DOCUMENT_ROOT"].'/Librerias/General/Auto_load.php');
?>  
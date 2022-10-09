<?php

$database='combustible';
$genera_interface_name='tanques';#combre asignado
    $tabla='Tanques';
    $name_validacion='Tanques'; 
    $ULR_Programa=$url_files[$programa_actual]['URL'];  
    $name_file=$url_files[$programa_actual]['Interfaces']['Consumo Camiones']['DOC_Name'];     
    include("enrutadorAuxiliar.php");
##formulario de registros 
    echo"<div class='formularios'>";
        $NAME=$url_files[$programa_actual]['Interfaces']['General_interfaces']['DOC_Name'];
        $URL=$url_files[$programa_actual]['Interfaces']['General_interfaces']['URL'];
        $TextColumna=array(
          "Nivel_inicial"=>'Nivel inicial',
          "NivelActual"=>'Nivel Actual',
          "Ultimo_Repostaje"=>'Nivel Actual'
        );
        include('includes.php');
        include("enrutadorAuxiliar.php");
        ##consola
            $NAME=$url_files[$programa_actual]['Consola_de_operaciones']['DOC_Name'];
            $URL=$url_files[$programa_actual]['Consola_de_operaciones']['URL'];
            include('includes.php');
    echo"</div>";
##lista de registros

        if(empty($columnaByOrder))$columnaByOrder='Nombre';
        #if(empty($DirecionByOrder))$DirecionByOrder='';
        $NAME=$url_files[$programa_actual]['Interfaces']['general_listas']['DOC_Name'];
        $URL=$url_files[$programa_actual]['Interfaces']['general_listas']['URL'];
        include('includes.php');
?>
<?php

$database='almacen';
$genera_interface_name='Consumo Camiones';#combre asignado

    $tabla='Operadores';
    $name_validacion='Operadores'; 
    $ULR_Programa=$url_files[$programa_actual]['URL'];  
    $name_file=$url_files[$programa_actual]['Interfaces']['Consumo Camiones']['DOC_Name'];     
    include("enrutadorAuxiliar.php");
##formulario de registros 
    echo"<div class='formularios'>";    
        $ColumnasEspeciales=array(
            'Estatus'=>array(
                'type'=>'despliegre',
                'ListaDeDatos'=>array('Activo','Inactivo')
            )
        );
        $NAME=$url_files[$programa_actual]['Interfaces']['General_interfaces']['DOC_Name'];
        $URL=$url_files[$programa_actual]['Interfaces']['General_interfaces']['URL'];
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
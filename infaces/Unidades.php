<?php

echo"<div class='formularios'>";
echo"<div class='titulos'>Editor Registro</div>";
#Interface_de_usuario para proceso de datos 
    if(empty($view))$view='';
    if(empty($validacionFormularo))$validacionFormularo='';

    $TextColumna="";
    $ColumnasEspeciales="";

    $TextColumna=array(
        'N_eco'=>'Numero Econo'
    );
    
    $ColumnasEspeciales=array(
        'Estatus'=>array(
            'type'=>'despliegre',
            'ListaDeDatos'=>array('Activo','Inactivo')
        )
    );
    include_once('general_interfaces.php');
echo"</div>";
#lista de los datos
mysqli_select_db ($conexion ,$database);
$getColumnas    = array('*');
$BuscaColumnas  = array();
$BuscaDatos     = array();
$Condiciones ="";
$columnaByOrder='Placas';
$DirecionByOrder ="ASC";
include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/Consola_de_operaciones.php');
include_once('general_listas.php');
?>
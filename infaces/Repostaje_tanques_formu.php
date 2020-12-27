<?php
echo"<div class='formularios'>";
echo"<div class='titulos'>Editor Registro</div>";
#
if(empty($view))$view='';

$TextColumna=array(
    'IDTanque'=>'Tanque',
    'Litros_Resividos'=>'Litros Comprados',
    'Precio_Litro'=>'Precio Por Litro',
);
mysqli_select_db ($conexion ,'combustible');
$Tanques     =$libre_v2->consulta('tanques',$conexion,'','','Nombre','',$phpv,'','');
$ColumnasEspeciales=array(
    'IDTanque'=>array(
        'type'=>'despliegre_mysql',
        'ConsultaMysql'=>$Tanques,
        'DatosMostrar'=>'Nombre'
    ),
    'Estatus'=>array(
        'type'=>'despliegre',
        'ListaDeDatos'=>array('Pendiente','Verificado')
    )
);
include_once('general_interfaces.php');
echo"</div>";
include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/Consola_de_operaciones.php');
?>
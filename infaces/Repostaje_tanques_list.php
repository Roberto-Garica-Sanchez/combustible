<?php
echo"<div id='Contenedor_auto2' class='Contenedor_auto2'>";        
$Repostaje= new inface($database,$tabla,$phpv,$conexion);
    $array=array(
        'tipo'=>array('formulario'=>'false','lista'=>'true'),
        'class'=>array(
            'columnaFija'=>'Diseno_botones1',
            'casilla'=>'Diseno_botones1',
            'id'=>'Diseno_boton_id'
        ),
        "lista"=>array(
            "ByOrder"=>array(
                "Columna"	=>'ID',
                "ASC-DESC"	=>'DESC'
            )
        )

    );
    $Repostaje->Interface_de_usuario($array);
   
echo"</div>";
?>
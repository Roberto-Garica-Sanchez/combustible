<?php
    $menu_Principal= new libre_v5('php7',$conexion,'');
    $name_menu[$programa_actual]="Menu_Princiapal";
    $elemento_menu[$programa_actual]=Array(
        'Consumo Camiones',
        'Carga De Tanque',
        'Tanques',
        'Clientes',
        'Operadores',
        'Unidades',
    );
    $class=array(
        'Conte_principal'=>'Menu_central',
        'Div_Opcion'=>'Conte_Cuadrado_auto',
        'Boton'=>'boton_Cuadrado_auto_claro',
        'img'=>'img_Cuadrado_auto'
    );
    $otros_arrays=array(
        'img_activa'=> 'true',
        'img_defaul'=>'../img/defaul.jpg',
        'img'=>array("","","","",""),                
        'icons'=>array(),
        'memoria'=>array('Activa'=>true,'type'=>'hidden')

    );
    $menu_Principal->menu2($name_menu[$programa_actual],$elemento_menu[$programa_actual],$class,$otros_arrays);
    #$name_menu,$elemento_menu,$class,$otros_arrays
?>
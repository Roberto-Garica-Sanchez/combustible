<?php
echo"<div class='formularios'>";
    echo"<div class='titulos'>Editor Registro</div>";
    
    if(empty($view))$view=true;    
    #if(empty($validacion_de_campos))$validacion_de_campos='';
    $TextColumna=array(
        'Contador_Inicio'=>'Contador Inicio',
        'Contador_Final'=>'Contador Final',
        'Total_Despachado'=>'Total',
        'TanqueSurtidor'=>'Tanque Surtidor'
    );
    mysqli_select_db ($conexion ,'almacen');
    ###################### Consulta Unidades
        $array=array(
            "tabla"=>'unidades',
            "Operacion"=>
            array('SELECT'=>array(
                    "Activar"	=>'true',
                    "LIKE"		=>'false',
                    "getColumnas"	=>array('*'),
                    "BuscaColumnas"	=>array('Estatus'),
                    "BuscaDatos"	=>array('Inactivo'),
                    "Condiciones"	=>array('!='),
                    "ByOrder"		=>array(
                        "Columna"	=>'Placas',
                        "ASC-DESC"	=>'ASC'
                        )

                )
            )
        );
        $Ares_v1-> GeneraSql($array);
        $sql=$Ares_v1-> getSql();
        $Placas=$libre_v2-> ejecuta($conexion,$sql,$phpv);
    ###################### Consulta Clientes
        $array=array(
            "tabla"=>'clientes',
            "Operacion"=>
            array('SELECT'=>array(
                    "Activar"	=>'true',
                    "LIKE"		=>'false',
                    "getColumnas"	=>array('*'),
                    "BuscaColumnas"	=>array('Estatus'),
                    "BuscaDatos"	=>array('Inactivo'),
                    "Condiciones"	=>array('!='),
                    "ByOrder"		=>array(
                        "Columna"	=>'Nombre',
                        "ASC-DESC"	=>'ASC'
                        )

                )
            )
        );
        $Ares_v1-> GeneraSql($array);
        $sql=$Ares_v1-> getSql();
        $Clientes=$libre_v2-> ejecuta($conexion,$sql,$phpv);
    ###################### Consulta Operadores
        $array=array(
            "tabla"=>'operadores',
            "Operacion"=>
            array('SELECT'=>array(
                    "Activar"	=>'true',
                    "LIKE"		=>'false',
                    "getColumnas"	=>array('*'),
                    "BuscaColumnas"	=>array('Estatus'),
                    "BuscaDatos"	=>array('Inactivo'),
                    "Condiciones"	=>array('!='),
                    "ByOrder"		=>array(
                        "Columna"	=>'Nombre',
                        "ASC-DESC"	=>'ASC'
                        )

                )
            )
        );
        $Ares_v1-> GeneraSql($array);
        $sql=$Ares_v1-> getSql();
        $Operadores=$libre_v2-> ejecuta($conexion,$sql,$phpv);


    mysqli_select_db ($conexion ,'combustible');
    $TanqueSurtidor =$libre_v2->consulta('tanques',$conexion,'','','Nombre','',$phpv,'','');
    #carga automticamente el contador final 
        $libre_v4->KeyColumnUsege($database,$tabla);            
        $ColumnaID=$libre_v4->getKeyColumnUsege();
        mysqli_select_db ($conexion ,'combustible');
        if(empty($_POST[$ColumnaID]) and empty($_POST['Contador_Inicio'])){
            $consuContador=$libre_v2->consulta($tabla,$conexion,'','','	Contador_Final','1',$phpv,'','');
            $UltimoContador=$libre_v2->mysql_fe_ar($consuContador,$phpv,'');
            if(!empty($UltimoContador['Contador_Final']))
            $_POST['Contador_Inicio']=$UltimoContador['Contador_Final'];
        }

    $ColumnasEspeciales=array(
        'Placas'=>array(
            'type'=>'despliegre_mysql',
            'ConsultaMysql'=>$Placas,
            'DatosMostrar'=>'Placas'
        ),
        'Cliente'=>array(
            'type'=>'despliegre_mysql',
            'ConsultaMysql'=>$Clientes,
            'DatosMostrar'=>'Nombre'
        ),
        'Operador'=>array(
            'type'=>'despliegre_mysql',
            'ConsultaMysql'=>$Operadores,
            'DatosMostrar'=>'Nombre'
        ),
        'TanqueSurtidor'=>array(
            'type'=>'despliegre_mysql',
            'ConsultaMysql'=>$TanqueSurtidor,
            'DatosMostrar'=>'Nombre'
        )
    );
    $Repostaje= new inface($database,$tabla,$phpv,$conexion);
    $array=array(
        'tipo'=>array('formulario'=>'true','lista'=>'false'),
        'class'=>array(
            'columnaFija'=>'Diseno_botones2',
            'casilla'=>'Diseno_botones3',
            'id'=>''
        ),
        'viewValidacion'=>$view,
        'validacionFormularo'=>$validacion_de_campos,
        'CambiosColumnas'=> array(
            'TextColumna'=>$TextColumna,                     //remplaza el nombre de una columna contador_inicial -> Inicio de Contador 
            'ColumnasEspeciales'=>$ColumnasEspeciales       //si se activa es te puede ingresar algo diferente a text
        )
        
    );
    $Repostaje->Interface_de_usuario($array);    
echo"</div>";
include_once($_SERVER["DOCUMENT_ROOT"]."/combustible/Consola_de_operaciones.php");
#Ventana Rapida
$subRutinas_combustible	=new subRutinas_combustible($phpv,$conexion);
$array=array(
    "db"=>'combustible'
);
$subRutinas_combustible->ventana_rapida($array);
?>
<?php

$database='combustible';
$genera_interface_name='Consumo Camiones';#combre asignado

    $tabla='repostajes_tanques';
    $name_validacion='repostajes_tanques'; 
    $ULR_Programa=$url_files[$programa_actual]['URL'];  
    $name_file=$url_files[$programa_actual]['Interfaces']['Consumo Camiones']['DOC_Name'];     
    include("enrutadorAuxiliar.php");
##formulario de registros 
    echo"<div class='formularios'>";
        
    $ColumnasEspeciales=array(
        #'IDTanque'=>array(
        #    'type'=>'despliegre_mysql',
        #    'ConsultaMysql'=>$Tanques,
        #    'DatosMostrar'=>'Nombre'
        #),
        'Estatus'=>array(
            'type'=>'despliegre',
            'ListaDeDatos'=>array('Activo','Inactivo')
        )
    );
        $NAME=$url_files[$programa_actual]['Interfaces']['General_interfaces']['DOC_Name'];
        $URL=$url_files[$programa_actual]['Interfaces']['General_interfaces']['URL'];
        include('includes.php');
        
        /*
            if(empty($database) or empty($tabla)or empty($phpv) or empty($conexion)or empty($genera_interface_name)){
                $Errores['Precargado'][]=
                array(
                    'name'=>'Genera_inface',
                    'message'=>'Faltan valores'
                );
                echo $registro_final=count($Errores['Precargado']);
                if(empty($database))                {$Errores['Precargado'][$registro_final-1]['database']='Valore no Asignado';}
                if(empty($tabla))                   {$Errores['Precargado'][$registro_final-1]['tabla']='Valore no Asignado';}
                if(empty($phpv))                    {$Errores['Precargado'][$registro_final-1]['phpv']='Valore no Asignado';}
                if(empty($conexion))                {$Errores['Precargado'][$registro_final-1]['conexion']='Valore no Asignado';}
                if(empty($genera_interface_name))   {$Errores['Precargado'][$registro_final-1]['genera_interface_name']='Valore no Asignado';}
                echo('<pre>');
                print_r($Errores['Precargado'][$registro_final-1]);
                echo('</pre>');
                exit();
            }else{        
                $inface[$genera_interface_name]= new inface($database,$tabla,$phpv,$conexion);
                if(!empty($validacionFormularo))$valida_porta=$validacionFormularo;
                if(!empty($validacion_de_campos))$valida_porta=$validacion_de_campos;
                if(empty($TextColumna))$TextColumna=array();
                if(empty($ColumnasEspeciales))$ColumnasEspeciales=array();
                if(empty($view))$view='true';
                if(empty($valida_porta)){echo "sistema de validacion no encontrado "; $valida_porta='';}
                $array=array(
                    'tipo'=>array('formulario'=>'true','lista'=>'false'),
                    'class'=>array(
                        'columnaFija'=>'Diseno_botones2',
                        'casilla'=>'Diseno_botones3',
                        'id'=>''
                    ),
                    'viewValidacion'=>$view,                            ## on/off para visualizar los elementos con error 
                    'validacionFormularo'=>$valida_porta,
                    'CambiosColumnas'=> array(
                        'TextColumna'=>$TextColumna,                     //remplaza el nombre de una columna contador_inicial -> Inicio de Contador 
                        'ColumnasEspeciales'=>$ColumnasEspeciales       //si se activa es te puede ingresar algo diferente a text
                    ),
                    "Interfaces"=>array(
                        "tablas_relacionadas"=>array(
                            "Columnas_a_descargar"=>array(
                                "Placas"=>'Placas',
                                "Provedor"=>'Nombre',
                                "Operador"=>'Nombre',
                            )
                        )
                    ),
                );
                $inface[$genera_interface_name]->Interface_de_usuario2($array);          
            }    
        */
        include("enrutadorAuxiliar.php");
        ##consola
            $NAME=$url_files[$programa_actual]['Consola_de_operaciones']['DOC_Name'];
            $URL=$url_files[$programa_actual]['Consola_de_operaciones']['URL'];
            include('includes.php');
    echo"</div>";
##lista de registros

        if(empty($columnaByOrder))$columnaByOrder='Placas';
        if(empty($DirecionByOrder))$DirecionByOrder='DESC';
        $NAME=$url_files[$programa_actual]['Interfaces']['general_listas']['DOC_Name'];
        $URL=$url_files[$programa_actual]['Interfaces']['general_listas']['URL'];
        include('includes.php');
?>
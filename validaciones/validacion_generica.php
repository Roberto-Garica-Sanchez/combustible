<?php 
#validacion generiaca v2 
$libre_v4-> Columnas($database,$tabla);             
$columnas=$libre_v4->getColumnas();         //obtiene las columnas de la tabla donde se guardar la informacion
#$Relagas_de_validacion=array(
#    "ColumnasEnExcepcion"=>array('',''),
#    "ValoresNoValidados"=>$valores_no_validos,#array('columna'=>valor)#array('columna'=>array('',''))
#);

##inicializa todas la variables de validacion 
    #estructura basada en las columnas
        $array_base=array();
        $array_base['validacion']=true;
        for ($i=0; $i <count($columnas) ; $i++) {$array_base[$columnas[$i]]=true;}
        $validacion_de_campos=array(
            "Validacion_general"=>true,
            "Validacion_insert"=>true,
            "Validacion_update"=>true,
            "Validacion_delect"=>true,
            "Campos_vacios"         =>$array_base,
            "noDefaul"              =>$array_base,
            "Valores_No_validos"    =>$array_base,
            "Error_especifico"      =>$array_base,
            "ColumnasRepetidas"     =>$array_base,
        );
##inicia todas la validaciones
    $libre_v4->KeyColumnUsege($database,$tabla);
    $libre_v4->ConsuColumnasUnicas($database,$tabla);
    $ColumnasUnica=$libre_v4->getConsuColumnasUnicas();
    $key=$libre_v4->getKeyColumnUsege();
#Calculos
#valida que este modificando registros
if(!empty($_POST['ID'])or !empty($_POST['id'])){
    $validacion_de_campos['Validacion_insert']=false;
} 
#verifica si las columnas estan vacias   
    $vacio=array();   
    for ($x=0; $x <count($columnas) ; $x++) {
        
        if(isset($Relagas_de_validacion["ColumnasEnExcepcion"])and in_array($columnas[$x],$Relagas_de_validacion["ColumnasEnExcepcion"])){ # verifica si la columnas tiene o no que ser verificada
            
            continue;
        }
        #if(isset($_POST[$columnas[$x]]))        #verifica que exista la variable 
        #if(!is_numeric($_POST[$columnas[$x]]))  #verifica que no sea numerica (permitira que los 0 sean contemplados como true)
        if(
            isset($_POST[$columnas[$x]])            ####verifica que exista la variable 
            and!is_numeric($_POST[$columnas[$x]])  ####verifica que no sea numerica (permitira que los 0 sean contemplados como true)
            and empty($_POST[$columnas[$x]])       ####verifica si la celda esta vacia
            and $key!=$columnas[$x]                 ####verifica que la columna no sea primera key
        )
            #and $columnas[$x]!='descripcion'####
            #and $columnas[$x]!='Descripcion')
        { #verifica que no este vacia y que no sea el ID
            
            #echo('<pre>');
            #print_r($_POST[$columnas[$x]]);
            #echo('</pre>');   
            $validacion_de_campos['Validacion_general']=false; # detiene los procesos 
            $validacion_de_campos['Campos_vacios'][$columnas[$x]]=false;
            $validacion_de_campos['Campos_vacios']['validacion']=false;
            
        }    
    }
    
#valida las columnas que son unicas ()<-verifica que los datos no este repetidos
    if(isset($ColumnasUnica) and gettype($ColumnasUnica)=='string'){
        #echo $ColumnasUnica;
        #echo $_POST[$ColumnasUnica]; 
        #echo    "<br>";
        #echo$validacion_de_campos['Campos_vacios'][$ColumnasUnica];
        #echo    "<br>";
        #echo $validacion_de_campos['Validacion_insert'];
        #echo    "<br>";
        if(
            isset($_POST[$ColumnasUnica]) 
            and $validacion_de_campos['Campos_vacios'][$ColumnasUnica]
            and $validacion_de_campos['Validacion_insert']==true){
            
            #consulta si las columnas unicas estan repatidas
                #$database,$tabla
                $libre_v2->db($database,$conexion,$phpv);
                $tabla				= $tabla;
                $getColumnas        = array('*');
                $BuscaColumnas      = array($ColumnasUnica);
                $BuscaDatos         = array($_POST[$ColumnasUnica]);
                
                $array=array(
                    "tabla"=>$tabla,
                    "Operacion"=>
                    array(      
                        'viewSQL'=>'false',
                        'SELECT'=>array(
                            "Activar"		=>'true',//'false'
                            "LIKE"			=>'true',//'false'
                            "LOWER"		    =>'true',
                            "UPPER"		    =>'falses',
                            "getColumnas"	=>$getColumnas,//array()
                            "BuscaColumnas"	=>$BuscaColumnas,//array()
                            "BuscaDatos"	=>$BuscaDatos,//array()
                        )
                    )
                );
                $Ares_v1->GeneraSql($array);
                #$sql=$Ares_v1->viewSql();
                $sql=$Ares_v1->getSql();

                $res=$libre_v2->ejecuta($conexion,$sql,$phpv);
                #echo$libre_v2->mysql_nu_ro		($res,$phpv);
                if($libre_v2->mysql_nu_ro		($res,$phpv)>=1){
                    $validacion_de_campos['Validacion_general']=false; # detiene los procesos 
                    $validacion_de_campos['ColumnasRepetidas']['validacion']=false;
                    $validacion_de_campos['ColumnasRepetidas'][$ColumnasUnica]=false;
                }
                
        }
    }elseif(isset($ColumnasUnica) and gettype($ColumnasUnica)=='array'){
        for ($i=0; $i <count($ColumnasUnica) ; $i++) { 
            if( isset($_POST[$ColumnasUnica[$i]]) and $validacion_de_campos['Campos_vacios'][$ColumnasUnica[$i]]and$validacion_de_campos['Validacion_insert']==true){
        
                $libre_v2->db($database,$conexion,$phpv);
                $tabla				= $tabla;
                $getColumnas        = array('*');
                $BuscaColumnas      = array($ColumnasUnica[$i]);
                $BuscaDatos         = array($_POST[$ColumnasUnica[$i]]);
                
                $array=array(
                    "tabla"=>$tabla,
                    "Operacion"=>
                    array(      'SELECT'=>array(
                            "Activar"		=>'true',//'false'
                            "LIKE"			=>'false',//'false'
                            "getColumnas"	=>$getColumnas,//array()
                            "BuscaColumnas"	=>$BuscaColumnas,//array()
                            "BuscaDatos"	=>$BuscaDatos,//array()
                        )
                    )
                );
                $Ares_v1->GeneraSql($array);
                #$sql=$Ares_v1->viewSql();
                $sql=$Ares_v1->getSql();

                $res=$libre_v2->ejecuta($conexion,$sql,$phpv);
                #echo$libre_v2->mysql_nu_ro		($res,$phpv);
                if($libre_v2->mysql_nu_ro		($res,$phpv)>=1){
                    $validacion_de_campos['Validacion_general']=false; # detiene los procesos 
                    $validacion_de_campos['ColumnasRepetidas']['validacion']=false;
                    $validacion_de_campos['ColumnasRepetidas'][$ColumnasUnica[$i]]=false;
                }
            }
        }
    }
#validaciones para valores no permitidos   (universal, desacativado )  
    if(isset($Relagas_de_validacion['ValoresNoValidados'])){
        $valores_no_validos=$Relagas_de_validacion['ValoresNoValidados'];
    }
    if(!isset($valores_no_validos))$valores_no_validos=array(
        #'Operador'=>'Operador',
        #'Placas'=>'Placas',
        #'Cliente'=>'Cliente',
        #'TanqueSurtidor'=>'TanqueSurtidor'
    );
    #echo('<pre>');
    #print_r($validacion_de_campos);
    #echo('</pre>');
    
    for ($i=0; $i <count($columnas) ; $i++) {
        if(!empty($valores_no_validos[$columnas[$i]])){
            if(isset($_POST[$columnas[$i]]) and $_POST[$columnas[$i]]==$valores_no_validos[$columnas[$i]] ){
                $validacion_de_campos['Validacion_general']=false; # detiene los procesos 
                $validacion_de_campos['noDefaul'][$columnas[$i]]=false;
                $validacion_de_campos['noDefaul']['validacion']=false;
            }
        }            
    }
    #echo('<pre>');
    #print_r($validacion_de_campos['Campos_vacios']);
    #echo('</pre>');   
							

?>
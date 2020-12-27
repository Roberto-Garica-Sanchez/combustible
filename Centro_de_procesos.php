<?php
    //el programa detecta que boton de operacion ha cido presionada (guadar,modificar,elminar)
    //y mediante el uso de los menus conoser exactamente que decea hacer el usuario 
    $libre_v5->memorias('');
    if(empty($_POST[$name_menu]))$_POST[$name_menu]=$elemento_menu[0];
    switch ($_POST[$name_menu]) {
        case $elemento_menu[0]: #Consumo De Combustible
            if(empty($_POST[$name_menu_repostajes]))$_POST[$name_menu_repostajes]=$elementos_menu_repostajes[0];
            switch ($_POST[$name_menu_repostajes]) {
                case $elementos_menu_repostajes[0]: #Carga De Combustible
                    $tabla='repostajes_unidades';
                    $database='combustible';
                    include_once('Inicia_operadores.php');
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Limpiar')        {include_once('limpiar_formulario/Repostaje_unidades_lim.php');}                    
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Eliminar')       {
                            echo $libre_v5->input('hidden','Confirma_eliminar','Confirma_eliminar','Confirma_eliminar','','','','');                        
                            $boton_Confirmar->propiedades['style']['display']='block';
                            $boton_Cancelar->propiedades['style']['display']='block';
                            $boton_Limpiar->propiedades['style']['display']='none';
                            $boton_Eliminar->propiedades['style']['display']='none';
                        }
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Confirmar' and !empty($_POST['Confirma_eliminar']))      {
                        include_once('SubRutinas/CompraDiesel_Pre.php');
                        include_once('Elimina/Repostajes_unidades_Elim.php');
                        include_once('SubRutinas/CompraDiesel.php');
                    }
                    if(!empty($_POST['Descargar'])) {include_once('Descargar/Respostaje_unidades_Desc.php');}
                    if(!empty($_POST['Operadores']) and ($_POST['Operadores']=='Guardar' or $_POST['Operadores']=='Modificar'))  
                    {$view='true';} else { $view='false';}
                    include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/validaciones/repostajes_unidades.php');
                
                    
                    if($validacion_de_campos['Validacion_general']==true){
                        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Guardar' and $validacion_de_campos['Validacion_insert']==true){
                                include_once('SubRutinas/CompraDiesel_Pre.php');
                                include_once('Guardar/Repostaje_unidades_save.php');
                                include_once('SubRutinas/CompraDiesel.php');
                            }
                        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Modificar' and $validacion_de_campos['Validacion_update']==true){
                            include_once('SubRutinas/CompraDiesel_Pre.php');
                            include_once('Modificar/Repostaje_unidades_mod.php');
                            include_once('SubRutinas/CompraDiesel.php');
                        }
                    }else{
                        if(empty($consola))$consola='';
                        $consola="<a class='ok'>campos vacios</a>";
                    }
                    
                break;
                case $elementos_menu_repostajes[1]:#Compra De Combustible
                    $tabla='repostajes_tanques';
                        $database='combustible';
                        include_once('Inicia_operadores.php');
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Limpiar')        {include_once('limpiar_formulario/Repostaje_tanques_lim.php');}
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Eliminar')       {
                        echo $libre_v5->input('hidden','Confirma_eliminar','Confirma_eliminar','Confirma_eliminar','','','','');                        
                        $boton_Confirmar->propiedades['style']['display']='block';
                        $boton_Cancelar->propiedades['style']['display']='block';
                        $boton_Limpiar->propiedades['style']['display']='none';
                        $boton_Eliminar->propiedades['style']['display']='none';
                    }
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Confirmar' and !empty($_POST['Confirma_eliminar'])){
                        include_once('SubRutinas/CompraDiesel_Pre.php');
                        include_once('Elimina/Repostajes_tanques_Elim.php');
                        include_once('SubRutinas/CompraDiesel.php');
                    }
                    if(!empty($_POST['Descargar']))                                             {include_once('Descargar/Respostaje_tanques_Desc.php');}
                    if(!empty($_POST['Operadores']) and ($_POST['Operadores']=='Guardar' or $_POST['Operadores']=='Modificar'))  
                    {$view='true';}else{ $view='false';}
                    include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/validaciones/repostaje_tanques.php');
                    
                    if(!empty($validacion_de_campos['Validacion_general']) and $validacion_de_campos['Validacion_general']==true){                        
                        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Guardar' and $validacion_de_campos['Validacion_insert']==true)        {
                            include_once('SubRutinas/CompraDiesel_Pre.php');
                            include_once('Guardar/Repostaje_tanques_save.php');
                            include_once('SubRutinas/CompraDiesel.php');
                        }
                        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Modificar' and $validacion_de_campos['Validacion_update']==true){
                            include_once('SubRutinas/CompraDiesel_Pre.php');
                            include_once('Modificar/Repostaje_tanques_mod.php');
                            include_once('SubRutinas/CompraDiesel.php');
                        }
                    }else{
                        if(empty($consola))$consola='';
                        $consola=$consola."<a class='ok'>campos vacios</a>";
                    }                
                break;
            }
        break;
        case $elemento_menu[1]: #Ajustes
            if(empty($_POST[$name_menu_tanques]))$_POST[$name_menu_tanques]=$elementos_ajustes[0];
            switch ($_POST[$name_menu_tanques]) {
                case $elementos_ajustes[0]:#tanques
                    $tabla='tanques';
                    $database='combustible';
                    include_once('Inicia_operadores.php');
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Limpiar')    {include_once('limpiar_formulario/Tanques_lim.php');}
                    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Eliminar')   {include_once('Elimina/tanques_Elim.php');}
                    if(!empty($_POST['Descargar']))                                         {include_once('Descargar/Tanques_Desc.php');}
                    if(!empty($_POST['Operadores']) and ($_POST['Operadores']=='Guardar' or $_POST['Operadores']=='Modificar'))  
                    {$view='true';} else { $view='false';}
                    
                    include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/validaciones/tanques.php');
                    if($validacion_de_campos['Validacion_general']==true){
                        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Guardar' and $validacion_de_campos['Validacion_insert']==true)        {include_once('Guardar/Tanques_save.php');}
                        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Modificar'and $validacion_de_campos['Validacion_update']==true)      {include_once('Modificar/tanques_mod.php');}
                    }else{
                        if(empty($consola))$consola='';
                        $consola=$consola."<a class='ok'>campos vacios</a>";
                    }
                
                break;
                case $elementos_ajustes[1]:#Analisis Cargas - Compra
                break;
                case $elementos_ajustes[3]:#operadores
                    $elemento=$elementos_ajustes[3];
                    $tabla='operadores';
                    $database='almacen';
                    include("enrutador.php");
                break;
                case $elementos_ajustes[4]:#Clientes
                    $elemento=$elementos_ajustes[4];
                    $tabla='clientes';
                    $database='almacen';
                    include("enrutador.php");
                break;
                case $elementos_ajustes[5]:#Unidades
                $elemento=$elementos_ajustes[5];
                    $tabla='unidades';
                    $database='almacen';
                    include("enrutador.php");
                break;
            }   
        break;
        case $elemento_menu[2]:#reporte

        break;
    }
    
?>

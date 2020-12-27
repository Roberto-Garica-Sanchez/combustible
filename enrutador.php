<?php 
    #$elemento=$elementos_ajustes[x]
    include_once('../Librerias/General/Inicia_operadores.php');
    if(!empty($_POST['Operadores']) and $_POST[' ']=='Limpiar')    {
        if(file_exists('limpiar_formulario/'.$elemento.'.php')){
            include_once('limpiar_formulario/'.$elemento.'.php');
        }else{echo'Archivo no encontrado';}
        else if(file_exists('limpiar_formulario/limpia_genericos.php')){
            include_once('limpiar_formulario/limpia_genericos.php');
        }else{echo'Archivo no encontrado';}


    }
    if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Eliminar')   {include_once('Elimina/'.$elemento.'.php');}
    if(!empty($_POST['Descargar']))                                         {include_once('Descargar/'.$elemento.'.php');}
    if(!empty($_POST['Operadores']) and ($_POST['Operadores']=='Guardar' or $_POST['Operadores']=='Modificar'))  
    {$view='true';} else { $view='false';}
    include_once('Validaciones/'.$elemento.'.php');#modificas el enrutado -> eliminar document_root

    if(!empty($validacionGeneral) and $validacionGeneral=='true'){
        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Guardar')        {include_once('Guardar/'.$elemento.'.php');}
        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Modificar')      {include_once('Modificar/'.$elemento.'.php');}
    }else{
        if(empty($consola))$consola='';
        $consola=$consola."<a class='ok'>campos vacios</a>";
    }
    if($validacion_de_campos['Validacion_general']==true){
        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Guardar' and $validacion_de_campos['Validacion_insert']==true)       {include_once('Guardar/'.$elemento.'.php');}
        if(!empty($_POST['Operadores']) and $_POST['Operadores']=='Modificar'and $validacion_de_campos['Validacion_update']==true)      {include_once('Modificar/'.$elemento.'.php');}
    }else{
        if(empty($consola))$consola='';
        $consola=$consola."<a class='ok'>campos vacios</a>";
    }
?>
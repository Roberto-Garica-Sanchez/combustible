<?php 

        
    if($_POST[$name_menu[$programa_actual]]=='Consumo Camiones'){
        $NAME=$url_files[$carpeta_raiz_actual]['Interfaces']['Consumo Camiones']['DOC_Name'];
        $URL=$url_files[$carpeta_raiz_actual]['Interfaces']['Consumo Camiones']['URL'];
        include('includes.php');
    }        
    if($_POST[$name_menu[$programa_actual]]=='Carga De Tanque'){
        $NAME=$url_files[$carpeta_raiz_actual]['Interfaces']['Carga De Tanque']['DOC_Name'];
        $URL=$url_files[$carpeta_raiz_actual]['Interfaces']['Carga De Tanque']['URL'];
        include('includes.php');
    }
    if($_POST[$name_menu[$programa_actual]]=='Tanques'){
        $NAME=$url_files[$carpeta_raiz_actual]['Interfaces']['Tanques']['DOC_Name'];
        $URL=$url_files[$carpeta_raiz_actual]['Interfaces']['Tanques']['URL'];
        include('includes.php');
    }
    if($_POST[$name_menu[$programa_actual]]=='Clientes'){
        $NAME=$url_files[$carpeta_raiz_actual]['Interfaces']['Clientes']['DOC_Name'];
        $URL=$url_files[$carpeta_raiz_actual]['Interfaces']['Clientes']['URL'];
        include('includes.php');
    }
    if($_POST[$name_menu[$programa_actual]]=='Operadores'){
        $NAME=$url_files[$carpeta_raiz_actual]['Interfaces']['Operadores']['DOC_Name'];
        $URL=$url_files[$carpeta_raiz_actual]['Interfaces']['Operadores']['URL'];
        include('includes.php');
    }
    if($_POST[$name_menu[$programa_actual]]=='Unidades'){
        $NAME=$url_files[$carpeta_raiz_actual]['Interfaces']['Unidades']['DOC_Name'];
        $URL=$url_files[$carpeta_raiz_actual]['Interfaces']['Unidades']['URL'];
        include('includes.php');
    }
?>
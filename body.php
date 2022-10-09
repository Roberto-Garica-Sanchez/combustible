<?php //inicio de codigo PHP
  date_default_timezone_set("Mexico/General");                        //ajusta la hora del servido en vasea una region 
  $phpv='php7';
  $info_programas=array(
    'Combustible'=>array(
      "NAME"=>'Combustible',
      "URLS"=>array(
        "Carpeta_raiz"=>"Combustible",        
      ),
    ),
  );
  $programa_actual=$info_programas['Combustible']['NAME'];
  $carpeta_raiz_actual=$info_programas['Combustible']['URLS']['Carpeta_raiz'];
  
  $url_files=array(     
    'Combustible'=> array(
      "URL"=>"/".$info_programas['Combustible']['URLS']['Carpeta_raiz'],
      "Descargas"=>   array(        
        "Consumo Camiones"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Descargas/",
          "DOC_Name"  =>"Consumo_Camiones.php"
        ),
        "Carga De Tanque"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Descargas/",
          "DOC_Name"  =>"Carga_De_Tanque.php"
        ),
        "Tanques"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Descargas/",
          "DOC_Name"  =>"Tanques.php"
        ),
        "Clientes"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Descargas/",
          "DOC_Name"  =>"Clientes.php"
        ),
        "Operadores"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Descargas/",
          "DOC_Name"  =>"Operadores.php"
        ),
        "Unidades"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Descargas/",
          "DOC_Name"  =>"Unidades.php"
        ),
      ),
      "Elimina"=>     array(        
        "Consumo Camiones"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Elimina/",
          "DOC_Name"  =>"Consumo_Camiones.php"
        ),  
        "Carga De Tanque"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Elimina/",
          "DOC_Name"  =>"Carga_De_Tanque.php"
        ),  
        "Tanques"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Elimina/",
          "DOC_Name"  =>"Tanques.php"
        ),
        "Clientes"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Elimina/",
          "DOC_Name"  =>"Clientes.php"
        ),        
        "Operadores"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Elimina/",
          "DOC_Name"  =>"Operadores.php"
        ),
        "Unidades"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Elimina/",
          "DOC_Name"  =>"Unidades.php"
        ),
      ),
      "Guardar"=>     array(        
        "Consumo Camiones"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Guardar/",
          "DOC_Name"  =>"Consumo_Camiones.php"
        ),        
        "Carga De Tanque"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Guardar/",
          "DOC_Name"  =>"Carga_De_Tanque.php"
        ),        
        "Clientes"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Guardar/",
          "DOC_Name"  =>"Clientes.php"
        ),      
        "Tanques"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Guardar/",
          "DOC_Name"  =>"Tanques.php"
        ),      
        "Operadores"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Guardar/",
          "DOC_Name"  =>"Operadores.php"
        ),
        "Unidades"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Guardar/",
          "DOC_Name"  =>"Unidades.php"
        ),
      ),
      "Interfaces"=>  array(
        "Contenedor_Principal"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Contenedor_Principal.php"
        ),
        "Carga De Tanque"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Carga_De_Tanque.php"
        ),
        "Consumo Camiones"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Consumo_Camiones.php"
        ),
        "Tanques"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Tanques.php"
        ),
        "Clientes"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Clientes.php"
        ),
        "Operadores"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Operadores.php"
        ),
        "Unidades"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"Unidades.php"
        ),
        "General_interfaces"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"general_interfaces.php"
        ),
        "general_listas"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Interfaces/",
          "DOC_Name"  =>"general_listas.php"
        
        )
      ),
      "Limpia"=>      array(),
      "Menus"=>       array(
        "Menu_Principal"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Menus/",
          "DOC_Name"  =>"Menu_Principal.php"
        )
      ),
      "Modificar"=>   array(  
        "Consumo Camiones"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Modificar/",
          "DOC_Name"  =>"Consumo_Camiones.php"
        ), 
        "Carga De Tanque"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Modificar/",
          "DOC_Name"  =>"Carga_De_Tanque.php"
        ),
        "Tanques"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Modificar/",
          "DOC_Name"  =>"Tanques.php"
        ), 
        "Clientes"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Modificar/",
          "DOC_Name"  =>"Clientes.php"
        ),
        "Unidades"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Modificar/",
          "DOC_Name"  =>"Unidades.php"
        ),
        "Operadores"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Modificar/",
          "DOC_Name"  =>"Operadores.php"
        ),
      ),
      "SubRutinas"=>  array(),
      "Validaciones"=>   array(        
        "Consumo Camiones"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Validaciones/",
          "DOC_Name"  =>"Consumo_Camiones.php"
        ),
        "Carga De Tanque"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Validaciones/",
          "DOC_Name"  =>"Carga_De_Tanque.php"
        ),
        "Tanques"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Validaciones/",
          "DOC_Name"  =>"Tanques.php"
        ),
        "Clientes"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Validaciones/",
          "DOC_Name"  =>"Clientes.php"
        ),        
        "Operadores"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Validaciones/",
          "DOC_Name"  =>"Operadores.php"
        ),
        "Unidades"=>array(
          "URL"=>"/".$carpeta_raiz_actual."/Validaciones/",
          "DOC_Name"  =>"Unidades.php"
        ),
      ),
      "Consola_de_operaciones"=>array(
          "URL"=>"/Librerias/General/",
          "DOC_Name"  =>"Consola_de_operaciones.php"
        ),
    )
  );  
 
  $Errores=array(
    "load_files"=>array(),
  );
  ###### Carga de Archivos Requeridos
    if(file_exists('Librerias_Requeridas.php')){
      include_once('Librerias_Requeridas.php');
    }else{##Error archivo no encontrados
      echo"Error de Carga de Archivo";
    } 
  ###### Sistemas Login
    $NAME='login_tem.php';
    $URL='/Librerias/General/';
    #include('includes.php');
  ### Menu
    $NAME =$url_files[$carpeta_raiz_actual]['Menus']['Menu_Principal']['DOC_Name'];
    $URL  =$url_files[$carpeta_raiz_actual]['Menus']['Menu_Principal']['URL'];
    include('includes.php');
  echo"<div name='Principal_v2' id='Principal_v2' class='Principal_v2'>";
    $NAME =$url_files[$carpeta_raiz_actual]['Interfaces']['Contenedor_Principal']['DOC_Name'];
    $URL  =$url_files[$carpeta_raiz_actual]['Interfaces']['Contenedor_Principal']['URL'];
    include('includes.php');
  echo"</div>";

  ### Contenedor principal
  #echo"<div name='Principal_v2' id='Principal_v2' class='Principal_v2'>";
  #echo"</div>";
?>
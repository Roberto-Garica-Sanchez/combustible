<?php 

##$NAME=$url_files['Casetas']['Menus']['Menu_Principal'];   ## Menu_Principal.php
##$URL=$url_files['Casetas']['Menus']['PreURL'];            ## /Casetas/Menus/
if(file_exists($_SERVER["DOCUMENT_ROOT"].$URL.$NAME)){
  include_once($_SERVER["DOCUMENT_ROOT"].$URL.$NAME);
}else{##Error archivo no encontrados
  $Errores['load_files'][]=
  array(
    'name'=>$NAME,
    'message'=>'Archivo No encontrado '.$NAME,
    'URL'=>$URL.$NAME
  );
  echo('<pre>');
  print_r($Errores);
  echo('</pre>');
}     

?>
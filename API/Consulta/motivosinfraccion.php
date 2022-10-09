<?php
$json=array();
        $resulta["clave"]= 0000-00-00;
        $resulta['articulo'] = 0000;
        $resulta["fraccion"]='No registra';
        $resulta["descripccion"] = 0;
        $resulta["estatus"]='No registra';
        $json['casos'][]=$resulta;
        echo json_encode($json);

?>
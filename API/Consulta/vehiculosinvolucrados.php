<?php
$json=array();
        $resulta["placas"]= 0000-00-00;
        $resulta['color'] = 0000;
        $resulta["marca"]='No registra';
        $resulta["modelo"] = 0;
        $resulta["año"]='No registra';
        $resulta["apellidoPProp"]='No registra';
        $resulta["apellidoMProp"]='No registra';
        $resulta["nombresProp"]='No registra';
        $json['casos'][]=$resulta;
        echo json_encode($json);

?>
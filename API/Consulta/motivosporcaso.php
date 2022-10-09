<?php
$json=array();
        $resulta["caso"]= 0000-00-00;
        $resulta['infractor'] = 0000;
        $resulta["motivo"]='No registra';
        $json['casos'][]=$resulta;
        echo json_encode($json);

?>
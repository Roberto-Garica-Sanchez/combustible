<?php
$json=array();
        $resulta["caso"]= 123456789;
        $resulta['vehiculo'] = 'e47tyg5';
        $resulta["participacion"]='pos choco';
        $json['casos'][]=$resulta;
        echo json_encode($json);

?>
<?php
$json=array();
        $resulta["clave"]= 0000-00-00;
        $resulta["apellido_P"] = 0000;
        $resulta["apellido_M"] = 0000;
        $resulta["nombres"] = 0000;
        $resulta["alias"]='No registra';
        $resulta["genero"]='No registra';
        $resulta["fechaNac"]='No registra';
        $resulta["domCalle"]='No registra';
        $resulta["domNumero"]='No registra';
        $resulta["domColPob"]='No registra';
        $resulta["domCP"]='No registra';
        $resulta["domMunicipio"]='No registra';
        $resulta["domEstado"]='No registra';
        $resulta["domPais"]='No registra';
        $resulta["ocupacion"]='No registra';
        $resulta["telefono"]='No registra';
        $resulta["email"]='No registra';
        $resulta["edoCivil"]='No registra';
        $resulta["escolaridad"]='No registra';
        $resulta["señasparticulares"]='No registra';
        $resulta["rutaFoto"]='No registra';
        $resulta["huellaPrincipal"]='No registra';
        $resulta["huellaAlterna"]='No registra';
        $json['casos'][]=$resulta;
        echo json_encode($json);

?>
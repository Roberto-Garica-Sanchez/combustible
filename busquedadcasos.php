<?php

$hostname='localhost';
$database='proyecto';
$username ='miguel';
$password ='42564256';

$json=array();

if(isset($_GET["policiaReceptor"])){
$policia = $_GET['policiaReceptor'];

    $conexion = mysqli_connect($hostname,$username,$password,$database);
    
   $consulta="SELECT *
    FROM casos WHERE policiaReceptor= '{$policia}'";
    
    $resultado=mysqli_query($conexion,$consulta);

    if($resgistro=mysqli_fetch_array($resultado)){
        $json['casos'][]=$resgistro;
    }else{
        $resulta["fecha"]= 0000-00-00;
        $resulta['hora'] = 0000;
        $resulta["domCalleTramo"]='No registra';
        $resulta["domNumero"] = 0;
        $resulta["domColPob"]='No registra';
        $resulta["domCalleTramo"]='No registra';
        $resulta["domNumero"] = 0;
        $resulta["domColPob"]='No registra';
        $resulta["domCP"] = 0;
        $resulta["domMunicipio"]='No registra';
        $resulta["domEstado"]='No registra';
        $resulta["ubicacionEntreCalle1"]='No registra';
        $resulta["ubicacionEntreCalle2"]='No registra';
        $resulta["ubicacionOtraRef"]='No registra';
        $resulta["fechaActualizacion"]= 0;
        $resulta["sector"]= 0;
        $resulta["fechaEntrada"] =0000-00-00;
        $resulta["horaEntrada"]= 0000;
        $resulta["Turno"]='No registra';
        $resulta["IPH"]= 0;
        $resulta["vinculos"] ='No registra';
        $resulta["observaciones"]='No registra';
        $resulta["narracion"] ='No registra';
        $resulta["prendasDepositadas"]='No registra';
        $resulta["policiaReceptor"]="policia1,policia2";
        $resulta["policiaReceptor"]="policia1&policia2";
        $json['casos'][]=$resulta;
        echo json_encode($json);
    }

    mysqli_close($conexion);
    echo json_encode($json);
}
else{
    $resulta["success"]= 0;
    $resulta["message"]= 'no retorna';
    $json['empleados'][]=$resulta;
    echo json_encode($json);
}

?>
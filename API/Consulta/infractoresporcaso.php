<?php
#echo $_GET['operador'];
$sql="SELECT * FROM infractoresporcaso";
$conexion = mysqli_connect('localhost','Acceso_sistema','Mv4d536et4Ex6ro3','justiciacivica'); //inicia comunicasion a  servidor 
if (!$conexion) {  //verifica la conexion, si detecta un error devulve una mensaje, y el error 
    die("Connection failed: " . mysqli_connect_error());
}
$consulta=mysqli_query($conexion,$sql)or die("\r<br>Error De Query<br>$sql<br>".mysqli_error($conexion));

$json=array();
#while (
    $datos=mysqli_fetch_array($consulta);
#) {
    $json["datos_consultados"][]=array(
        "caso"=>$datos["caso"],
        "infractor"=>$datos["infractor"],
        "participacionEnCaso"=>$datos["participacionEnCaso"],
    );
#}
echo count($json['datos_consultados'][0]);

echo('<pre>');
print_r($json);
echo('</pre>');
/*
echo json_encode($json);  
echo"<br>";

$json=array();
        $resulta["caso"]= 1234567;
        $resulta['infractor'] = 5969;
        $resulta["participacionEnCaso"]='blabla!!';
        $json['casos'][]=$resulta;
echo('<pre>');
print_r($json);
echo('</pre>');*/
echo json_encode($json);  
        

?>

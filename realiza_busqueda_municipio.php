<?php

if(isset($_POST['busqueda'])){
    $b=$_POST['busqueda'];
    $busqueda=strtoupper($b);
} else{
    $busqueda="";
}

$html = file_get_contents("http://openbizkaibus.appspot.com/api/Consultar_FamiliasCentros");
$datos_fc = json_decode($html,true);
        
//echo "<pre>";
for ($j=0; $j < count($datos_fc) ; $j++) { 
    //echo $datos[$j]['DescripcionGrupo']."\n";
    //echo "=========================\n";

    for($i=0; $i<count($datos_fc[$j]['Registros']); $i++) {

        if($busqueda == $datos_fc[$j]['Registros'][$i]["DescripcionElemento"]) {
            
            $datos= $datos_fc[$j]['Registros'][$i]["CodigoElemento"];
            echo json_encode($datos);
            //echo "El codigo es: ".$datos_fc[$j]['Registros'][$i]["CodigoElemento"];
        }
        //echo $datos[$j]['Registros'][$i]["DescripcionElemento"]." - ".$datos[$j]['Registros'][$i]["CodigoElemento"]."\n";
    }
    //echo "\n";    
}
//echo "</pre>";






/*    
$q = "SELECT * FROM pacientedatos";
$res_busqueda=$mysqli->query( $q );
$datos = array();

while( $row = $res_busqueda->fetch_row() )
    {
        $datos[] = array(
            'numhistorial'       => $row[0],
            'nombre'             => $row[1],
            'apellido'           => $row[2],
            'dni'                => $row[5],
            'telefhab'           => $row[6],
            'situacion'          => $row[11],
            'facultativo'        => $row[13]
        );
    }
echo json_encode($datos);
*/

?>
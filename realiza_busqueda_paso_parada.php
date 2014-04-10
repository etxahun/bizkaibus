<?php

if(isset($_POST['parada'])){
    $parada=$_POST['parada'];
} else{
    $parada="";
}


//$parada2="48054069";
$html = file_get_contents("http://openbizkaibus.appspot.com/api/GetPasoParada?codparada=".$parada);
$datos_parada = json_decode($html,true);

/*       
for ($j=0; $j < count($datos_parada) ; $j++) { 

    for($i=0; $i<count($datos_parada[$j]['Tiempos']); $i++) {

        if($busqueda == $datos_parada[$j]['Registros'][$i]["DescripcionElemento"]) {            
            $datos= $datos_parada[$j]['Registros'][$i]["CodigoElemento"];
        }
    }   
}
*/

//echo $html2;
//echo "<pre>";
echo json_encode($datos_parada);
//echo "</pre>";
?>
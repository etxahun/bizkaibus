<?php

if(isset($_POST['busqueda'])){
    $b = $_POST['busqueda'];
    $busqueda = strtoupper($b);
} else{
    $busqueda = "";
}

/*
$html = file_get_contents("http://openbizkaibus.appspot.com/api/Consultar_FamiliasCentros");
$datos_fc = json_decode($html,true);
        
for ($j=0; $j < count($datos_fc) ; $j++) { 

    for($i=0; $i<count($datos_fc[$j]['Registros']); $i++) {

        if($busqueda == $datos_fc[$j]['Registros'][$i]["DescripcionElemento"]) {            
            $datos = $datos_fc[$j]['Registros'][$i]["CodigoElemento"];
        }
    }   
}


if($datos < 10){
    $cadena = "http://openbizkaibus.appspot.com/api/LineasMunicipio?codmunicipio=00".$datos;
}elseif ($datos < 100) {
    $cadena = "http://openbizkaibus.appspot.com/api/LineasMunicipio?codmunicipio=0".$datos;
}else{
    $cadena = "http://openbizkaibus.appspot.com/api/LineasMunicipio?codmunicipio=".$datos;
}*/

$cadena = "http://openbizkaibus.appspot.com/api/LineasMunicipio?codmunicipio=".$busqueda;

$html2 = file_get_contents($cadena);    
$datos_lineas = json_decode($html2,true);

//echo json_encode($datos_lineas);

echo $html2;

?>
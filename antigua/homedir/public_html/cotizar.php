<?php

define("PRECIO_CM",1500);
$result = array("result"=>false,"msg"=>"Error al procezar la cotizacion");
if(isset($_POST['action'])&& $_POST['action']=="cotizar"){
    $ancho = isset($_POST['ancho']) && is_numeric($_POST['ancho'])?$_POST['ancho']:0;
    $alto = isset($_POST['alto']) && is_numeric($_POST['alto'])?$_POST['alto']:0;
    if($alto!=0 && $ancho!=0){
        $cms = $alto * $ancho;
        $result['msg'] = "El precio de un porton de ".$ancho." cms por ".$alto." cms".
                          " es de \$".  number_format(($cms * PRECIO_CM/10000),2,",",".");
        $result['result'] = true;
    }else{
        $result['msg'] = "Debe especificar un ancho y un alto del porton a cotizar.";
    }
}

if ( !function_exists('json_encode') ){
    function json_encode($content){
                require_once 'json.php';
                $json = new Services_JSON;

        return $json->encode($content);
    }
}
echo json_encode($result);
/**
 * 10 * 10 -> 150
 * x    ->y
 */
?>

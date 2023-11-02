<?php  

class Add_formulario{
    
    public static function registrar($hotel,$recomendaria, $acompanamiento, $motivo, $edad, $entrada, $duracion, $estado_hotel, $limpieza_hotel, $familia_hotel, $minus_hotel, $variedad_comidas, $calidad_comidas, $decoracion, $limpieza_bar, $animacion, $piscinas, $playa, $guarderia, $limpieza_hab, $tam_hab, $equipamiento, $tam_ban, $tiendas, $transporte, $bares_zona, $oferta_tiempo, $dis_playa, $amabilidad, $idiomas, $recepcion, $reclamaciones, $comentarios, $dormitorios, $habitacion, $catalogo, $estrellas, $calidad_precio, $operador, $num_habitacion, $nombre, $calle, $codigo, $ciudad, $pais, $email){
        $conexion=BaseDatos::getInstancia()->getConexion();
        session_start();
        $sql="INSERT INTO `cuestionarios`(`hotel`, `recomendaria`, `acompanamiento`, `motivo`, `edad`, `entrada`, `duracion`, `estado_hotel`, `limpieza_hotel`, `familia_hotel`, `minus_hotel`, `variedad_comidas`, `calidad_comidas`, `decoracion`, `limpieza_bar`, `animacion`, `piscinas`, `playa`, `guarderia`, `limpieza_hab`, `tam_hab`, `equipamiento`, `tam_ban`, `tiendas`, `transporte`, `bares_zona`, `oferta_tiempo`, `dis_playa`, `amabilidad`, `idiomas`, `recepcion`, `reclamaciones`, `comentarios`, `dormitorios`, `habitacion`, `catalogo`, `estrellas`, `calidad_precio`, `operador`, `num_habitacion`, `nombre`, `calle`, `codigo`, `ciudad`, `pais`, `email`, `usuario_grabado`, `fecha_grabado`) VALUES (:clave1,:clave2,:clave3,:clave4,:clave5,:clave6,:clave7,:clave8,:clave9,:clave10,:clave11,:clave12,:clave13,:clave14,:clave15,:clave16,:clave17,:clave18,:clave19,:clave20,:clave21,:clave22,:clave23,:clave24,:clave25,:clave26,:clave27,:clave28,:clave29,:clave30,:clave31,:clave32,:clave33,:clave34,:clave35,:clave36,:clave37,:clave38,:clave39,:clave40,:clave41,:clave42,:clave43,:clave44,:clave45,:clave46,:clave47,NOW())";
        $peticion=$conexion->prepare($sql);
        $peticion->execute(array(":clave1"=>$hotel,
                                 ":clave2"=>$recomendaria,
                                 ":clave3"=>$acompanamiento,
                                 ":clave4"=>$motivo,
                                 ":clave5"=>$edad,
                                 ":clave6"=>$entrada,
                                 ":clave7"=>$duracion,
                                 ":clave8"=>$estado_hotel,
                                 ":clave9"=>$limpieza_hotel,
                                 ":clave10"=>$familia_hotel, 
                                 ":clave11"=>$minus_hotel, 
                                 ":clave12"=>$variedad_comidas, 
                                 ":clave13"=>$calidad_comidas, 
                                 ":clave14"=>$decoracion, 
                                 ":clave15"=>$limpieza_bar, 
                                 ":clave16"=>$animacion, 
                                 ":clave17"=>$piscinas, 
                                 ":clave18"=>$playa, 
                                 ":clave19"=>$guarderia, 
                                 ":clave20"=>$limpieza_hab, 
                                 ":clave21"=>$tam_hab, 
                                 ":clave22"=>$equipamiento, 
                                 ":clave23"=>$tam_ban, 
                                 ":clave24"=>$tiendas, 
                                 ":clave25"=>$transporte, 
                                 ":clave26"=>$bares_zona, 
                                 ":clave27"=>$oferta_tiempo, 
                                 ":clave28"=>$dis_playa, 
                                 ":clave29"=>$amabilidad, 
                                 ":clave30"=>$idiomas, 
                                 ":clave31"=>$recepcion, 
                                 ":clave32"=>$reclamaciones, 
                                 ":clave33"=>$comentarios, 
                                 ":clave34"=>$dormitorios, 
                                 ":clave35"=>$habitacion, 
                                 ":clave36"=>$catalogo, 
                                 ":clave37"=>$estrellas, 
                                 ":clave38"=>$calidad_precio, 
                                 ":clave39"=>$operador, 
                                 ":clave40"=>$num_habitacion, 
                                 ":clave41"=>$nombre, 
                                 ":clave42"=>$calle, 
                                 ":clave43"=>$codigo, 
                                 ":clave44"=>$ciudad, 
                                 ":clave45"=>$pais, 
                                 ":clave46"=>$email,
                                 ":clave47"=>$_SESSION['usuario']));
       
    }
}
?>
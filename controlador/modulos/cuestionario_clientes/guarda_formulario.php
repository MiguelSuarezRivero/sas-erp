<?php
//require_once '../../controlador/variables.php';
require_once '../../../modelo/baseDatos.php';
require_once '../../../modelo/modulos/cuestionario_clientes/anadir_registro.php';

$recomendaria = (!isset($_POST['recomendaria'])) ? 0 : $_POST['recomendaria'];
$acompanamiento = (!isset($_POST['acompanamiento'])) ? 0 : $_POST['acompanamiento'];
$motivo = (!isset($_POST['motivo'])) ? 0 : $_POST['motivo'];
$edad = (!isset($_POST['edad'])) ? 0 : $_POST['edad'];
$duracion = (!isset($_POST['duracion'])) ? 0 : $_POST['duracion'];
$estado_hotel = (!isset($_POST['estado_hotel'])) ? 0 : $_POST['estado_hotel'];
$limpieza_hotel = (!isset($_POST['limpieza_hotel'])) ? 0 : $_POST['limpieza_hotel'];
$familia_hotel = (!isset($_POST['familia_hotel'])) ? 0 : $_POST['familia_hotel'];
$minus_hotel = (!isset($_POST['minus_hotel'])) ? 0 : $_POST['minus_hotel'];
$variedad_comidas = (!isset($_POST['variedad_comidas'])) ? 0 : $_POST['variedad_comidas'];
$calidad_comidas = (!isset($_POST['calidad_comidas'])) ? 0 : $_POST['calidad_comidas'];
$decoracion = (!isset($_POST['decoracion'])) ? 0 : $_POST['decoracion'];
$limpieza_bar = (!isset($_POST['limpieza_bar'])) ? 0 : $_POST['limpieza_bar'];
$animacion = (!isset($_POST['animacion'])) ? 0 : $_POST['animacion'];
$piscinas = (!isset($_POST['piscinas'])) ? 0 : $_POST['piscinas'];
$playa = (!isset($_POST['playa'])) ? 0 : $_POST['playa'];
$guarderia = (!isset($_POST['guarderia'])) ? 0 : $_POST['guarderia'];
$limpieza_hab = (!isset($_POST['limpieza_hab'])) ? 0 : $_POST['limpieza_hab'];
$tam_hab = (!isset($_POST['tam_hab'])) ? 0 : $_POST['tam_hab'];
$equipamiento = (!isset($_POST['equipamiento'])) ? 0 : $_POST['equipamiento'];
$tam_ban = (!isset($_POST['tam_bano'])) ? 0 : $_POST['tam_bano'];
$tiendas = (!isset($_POST['tiendas'])) ? 0 : $_POST['tiendas'];
$transporte = (!isset($_POST['transporte'])) ? 0 : $_POST['transporte'];
$bares_zona = (!isset($_POST['bares_zona'])) ? 0 : $_POST['bares_zona'];
$oferta_tiempo = (!isset($_POST['oferta_tiempo'])) ? 0 : $_POST['oferta_tiempo'];
$dis_playa = (!isset($_POST['dis_playa'])) ? 0 : $_POST['dis_playa'];
$amabilidad = (!isset($_POST['amabilidad'])) ? 0 : $_POST['amabilidad'];
$idiomas = (!isset($_POST['idiomas'])) ? 0 : $_POST['idiomas'];
$recepcion = (!isset($_POST['recepcion'])) ? 0 : $_POST['recepcion'];
$reclamaciones = (!isset($_POST['reclamaciones'])) ? 0 : $_POST['reclamaciones'];
$dormitorios = (!isset($_POST['dormitorios'])) ? 0 : $_POST['dormitorios'];
$habitacion = (!isset($_POST['habitacion'])) ? 0 : $_POST['habitacion'];
$catalogo = (!isset($_POST['catalogo'])) ? 0 : $_POST['catalogo'];
$estrellas = (!isset($_POST['estrellas'])) ? 0 : $_POST['estrellas'];
$calidad_precio = (!isset($_POST['calidad_precio'])) ? 0 : $_POST['calidad_precio'];
$operador = (!isset($_POST['operador'])) ? 0 : $_POST['operador'];

Add_formulario::registrar($_POST['hotel'],$recomendaria, $acompanamiento, $motivo, $edad, $_POST['entrada'], $duracion, $estado_hotel, $limpieza_hotel, $familia_hotel, $minus_hotel, $variedad_comidas, $calidad_comidas, $decoracion, $limpieza_bar, $animacion, $piscinas, $playa, $guarderia, $limpieza_hab, $tam_hab, $equipamiento, $tam_ban, $tiendas, $transporte, $bares_zona, $oferta_tiempo, $dis_playa, $amabilidad, $idiomas, $recepcion, $reclamaciones, $_POST['comentarios'], $dormitorios, $habitacion, $catalogo, $estrellas, $calidad_precio, $operador, $_POST['num_habitacion'], $_POST['nombre'], $_POST['calle'], $_POST['codigo'], $_POST['ciudad'], $_POST['pais'], $_POST['email']);
?>

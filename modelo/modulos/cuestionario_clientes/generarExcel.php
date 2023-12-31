<?php

include_once $_SESSION['path'] . 'modelo/clases/PHPExcel.php';

class GenerarExcel{
    
    public function guardar($archivo, $hotel, $desde){

$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load($archivo);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'CONTROL RESUMEN  DE CUESTIONARIOS DE ' . strtoupper ($hotel))
            ->setCellValue('B3', $desde)
            ->setCellValue('E3', $GLOBALS['numero'])
            ->setCellValue('A12', $GLOBALS['recomienda1'])
            ->setCellValue('B12', $GLOBALS['recomienda2'])
            ->setCellValue('A16', $GLOBALS['acomp1'])
            ->setCellValue('B16', $GLOBALS['acomp2'])
            ->setCellValue('C16', $GLOBALS['acomp3'])
            ->setCellValue('D16', $GLOBALS['acomp4'])
            ->setCellValue('E16', $GLOBALS['acomp5'])
            ->setCellValue('A20', $GLOBALS['motivo1'])
            ->setCellValue('D20', $GLOBALS['motivo2'])
            ->setCellValue('E20', $GLOBALS['motivo3'])
            ->setCellValue('C5', $GLOBALS['edad1'])
            ->setCellValue('D5', $GLOBALS['edad2'])
            ->setCellValue('E5', $GLOBALS['edad3'])
            ->setCellValue('F5', $GLOBALS['edad4'])
            ->setCellValue('G5', $GLOBALS['edad5'])
            ->setCellValue('H5', $GLOBALS['edad6'])
            ->setCellValue('G8', $GLOBALS['edad7'])
            ->setCellValue('H8', $GLOBALS['edad8'])
            ->setCellValue('G11', $GLOBALS['edad9'])
            ->setCellValue('H11', $GLOBALS['edad10'])
            ->setCellValue('H14', $GLOBALS['edad11'])
            ->setCellValue('C7', $GLOBALS['duracion1'])
            ->setCellValue('D7', $GLOBALS['duracion2'])
            ->setCellValue('E7', $GLOBALS['duracion3'])
            ->setCellValue('E9', $GLOBALS['duracion4'])
            ->setCellValue('B26', $GLOBALS['estado_hotel1'])
            ->setCellValue('B27', $GLOBALS['estado_hotel2'])
            ->setCellValue('B28', $GLOBALS['estado_hotel3'])
            ->setCellValue('B29', $GLOBALS['estado_hotel4'])
            ->setCellValue('B30', $GLOBALS['estado_hotel5'])
            ->setCellValue('B31', $GLOBALS['estado_hotel6'])
            ->setCellValue('D26', $GLOBALS['limpieza_hotel1'])
            ->setCellValue('D27', $GLOBALS['limpieza_hotel2'])
            ->setCellValue('D28', $GLOBALS['limpieza_hotel3'])
            ->setCellValue('D29', $GLOBALS['limpieza_hotel4'])
            ->setCellValue('D30', $GLOBALS['limpieza_hotel5'])
            ->setCellValue('D31', $GLOBALS['limpieza_hotel6'])
            ->setCellValue('F26', $GLOBALS['familia_hotel1'])
            ->setCellValue('F27', $GLOBALS['familia_hotel2'])
            ->setCellValue('F28', $GLOBALS['familia_hotel3'])
            ->setCellValue('F29', $GLOBALS['familia_hotel4'])
            ->setCellValue('F30', $GLOBALS['familia_hotel5'])
            ->setCellValue('F31', $GLOBALS['familia_hotel6'])
            ->setCellValue('H26', $GLOBALS['minus1'])
            ->setCellValue('H27', $GLOBALS['minus2'])
            ->setCellValue('H28', $GLOBALS['minus3'])
            ->setCellValue('H29', $GLOBALS['minus4'])
            ->setCellValue('H30', $GLOBALS['minus5'])
            ->setCellValue('H31', $GLOBALS['minus6'])
            ->setCellValue('B38', $GLOBALS['varidad_comidas1'])
            ->setCellValue('B39', $GLOBALS['varidad_comidas2'])
            ->setCellValue('B40', $GLOBALS['varidad_comidas3'])
            ->setCellValue('B41', $GLOBALS['varidad_comidas4'])
            ->setCellValue('B42', $GLOBALS['varidad_comidas5'])
            ->setCellValue('B43', $GLOBALS['varidad_comidas6'])
            ->setCellValue('D38', $GLOBALS['calidad_comidas1'])
            ->setCellValue('D39', $GLOBALS['calidad_comidas2'])
            ->setCellValue('D40', $GLOBALS['calidad_comidas3'])
            ->setCellValue('D41', $GLOBALS['calidad_comidas4'])
            ->setCellValue('D42', $GLOBALS['calidad_comidas5'])
            ->setCellValue('D43', $GLOBALS['calidad_comidas6'])
            ->setCellValue('F38', $GLOBALS['deco1'])
            ->setCellValue('F39', $GLOBALS['deco2'])
            ->setCellValue('F40', $GLOBALS['deco3'])
            ->setCellValue('F41', $GLOBALS['deco4'])
            ->setCellValue('F42', $GLOBALS['deco5'])
            ->setCellValue('F43', $GLOBALS['deco6'])
            ->setCellValue('H38', $GLOBALS['limpieza_bar1'])
            ->setCellValue('H39', $GLOBALS['limpieza_bar2'])
            ->setCellValue('H40', $GLOBALS['limpieza_bar3'])
            ->setCellValue('H41', $GLOBALS['limpieza_bar4'])
            ->setCellValue('H42', $GLOBALS['limpieza_bar5'])
            ->setCellValue('H43', $GLOBALS['limpieza_bar6'])
            ->setCellValue('B48', $GLOBALS['animacion1'])
            ->setCellValue('B49', $GLOBALS['animacion2'])
            ->setCellValue('B50', $GLOBALS['animacion3'])
            ->setCellValue('B51', $GLOBALS['animacion4'])
            ->setCellValue('B52', $GLOBALS['animacion5'])
            ->setCellValue('B53', $GLOBALS['animacion6'])
            ->setCellValue('D48', $GLOBALS['piscinas1'])
            ->setCellValue('D49', $GLOBALS['piscinas2'])
            ->setCellValue('D50', $GLOBALS['piscinas3'])
            ->setCellValue('D51', $GLOBALS['piscinas4'])
            ->setCellValue('D52', $GLOBALS['piscinas5'])
            ->setCellValue('D53', $GLOBALS['piscinas6'])
            ->setCellValue('F48', $GLOBALS['playa1'])
            ->setCellValue('F49', $GLOBALS['playa2'])
            ->setCellValue('F50', $GLOBALS['playa3'])
            ->setCellValue('F51', $GLOBALS['playa4'])
            ->setCellValue('F52', $GLOBALS['playa5'])
            ->setCellValue('F53', $GLOBALS['playa6'])
            ->setCellValue('H48', $GLOBALS['guarderia1'])
            ->setCellValue('H49', $GLOBALS['guarderia2'])
            ->setCellValue('H50', $GLOBALS['guarderia3'])
            ->setCellValue('H51', $GLOBALS['guarderia4'])
            ->setCellValue('H52', $GLOBALS['guarderia5'])
            ->setCellValue('H53', $GLOBALS['guarderia6'])
            ->setCellValue('B57', $GLOBALS['limpieza_hab1'])
            ->setCellValue('B58', $GLOBALS['limpieza_hab2'])
            ->setCellValue('B59', $GLOBALS['limpieza_hab3'])
            ->setCellValue('B60', $GLOBALS['limpieza_hab4'])
            ->setCellValue('B61', $GLOBALS['limpieza_hab5'])
            ->setCellValue('B62', $GLOBALS['limpieza_hab6'])
            ->setCellValue('D57', $GLOBALS['tam_hab1'])
            ->setCellValue('D58', $GLOBALS['tam_hab2'])
            ->setCellValue('D59', $GLOBALS['tam_hab3'])
            ->setCellValue('D60', $GLOBALS['tam_hab4'])
            ->setCellValue('D61', $GLOBALS['tam_hab5'])
            ->setCellValue('D62', $GLOBALS['tam_hab6'])
            ->setCellValue('F57', $GLOBALS['equipamiento1'])
            ->setCellValue('F58', $GLOBALS['equipamiento2'])
            ->setCellValue('F59', $GLOBALS['equipamiento3'])
            ->setCellValue('F60', $GLOBALS['equipamiento4'])
            ->setCellValue('F61', $GLOBALS['equipamiento5'])
            ->setCellValue('F62', $GLOBALS['equipamiento6'])
            ->setCellValue('H57', $GLOBALS['tam_ban1'])
            ->setCellValue('H58', $GLOBALS['tam_ban2'])
            ->setCellValue('H59', $GLOBALS['tam_ban3'])
            ->setCellValue('H60', $GLOBALS['tam_ban4'])
            ->setCellValue('H61', $GLOBALS['tam_ban5'])
            ->setCellValue('H62', $GLOBALS['tam_ban6'])
            ->setCellValue('B75', $GLOBALS['tiendas1'])
            ->setCellValue('B76', $GLOBALS['tiendas2'])
            ->setCellValue('B77', $GLOBALS['tiendas3'])
            ->setCellValue('B78', $GLOBALS['tiendas4'])
            ->setCellValue('B79', $GLOBALS['tiendas5'])
            ->setCellValue('B80', $GLOBALS['tiendas6'])
            ->setCellValue('D75', $GLOBALS['transporte1'])
            ->setCellValue('D76', $GLOBALS['transporte2'])
            ->setCellValue('D77', $GLOBALS['transporte3'])
            ->setCellValue('D78', $GLOBALS['transporte4'])
            ->setCellValue('D79', $GLOBALS['transporte5'])
            ->setCellValue('D80', $GLOBALS['transporte6'])
            ->setCellValue('F75', $GLOBALS['bares_zona1'])
            ->setCellValue('F76', $GLOBALS['bares_zona2'])
            ->setCellValue('F77', $GLOBALS['bares_zona3'])
            ->setCellValue('F78', $GLOBALS['bares_zona4'])
            ->setCellValue('F79', $GLOBALS['bares_zona5'])
            ->setCellValue('F80', $GLOBALS['bares_zona6'])
            ->setCellValue('H75', $GLOBALS['oferta_tiempo1'])
            ->setCellValue('H76', $GLOBALS['oferta_tiempo2'])
            ->setCellValue('H77', $GLOBALS['oferta_tiempo3'])
            ->setCellValue('H78', $GLOBALS['oferta_tiempo4'])
            ->setCellValue('H79', $GLOBALS['oferta_tiempo5'])
            ->setCellValue('H80', $GLOBALS['oferta_tiempo6'])
            ->setCellValue('B84', $GLOBALS['dis_playa1'])
            ->setCellValue('B85', $GLOBALS['dis_playa2'])
            ->setCellValue('B86', $GLOBALS['dis_playa3'])
            ->setCellValue('B87', $GLOBALS['dis_playa4'])
            ->setCellValue('B88', $GLOBALS['dis_playa5'])
            ->setCellValue('B89', $GLOBALS['dis_playa6'])
            ->setCellValue('B95', $GLOBALS['amabilidad1'])
            ->setCellValue('B96', $GLOBALS['amabilidad2'])
            ->setCellValue('B97', $GLOBALS['amabilidad3'])
            ->setCellValue('B98', $GLOBALS['amabilidad4'])
            ->setCellValue('B99', $GLOBALS['amabilidad5'])
            ->setCellValue('B100', $GLOBALS['amabilidad6'])
            ->setCellValue('D95', $GLOBALS['idiomas1'])
            ->setCellValue('D96', $GLOBALS['idiomas2'])
            ->setCellValue('D97', $GLOBALS['idiomas3'])
            ->setCellValue('D98', $GLOBALS['idiomas4'])
            ->setCellValue('D99', $GLOBALS['idiomas5'])
            ->setCellValue('D100', $GLOBALS['idiomas6'])
            ->setCellValue('F95', $GLOBALS['recepcion1'])
            ->setCellValue('F96', $GLOBALS['recepcion2'])
            ->setCellValue('F97', $GLOBALS['recepcion3'])
            ->setCellValue('F98', $GLOBALS['recepcion4'])
            ->setCellValue('F99', $GLOBALS['recepcion5'])
            ->setCellValue('F100', $GLOBALS['recepcion6'])
            ->setCellValue('H95', $GLOBALS['reclamaciones1'])
            ->setCellValue('H96', $GLOBALS['reclamaciones2'])
            ->setCellValue('H97', $GLOBALS['reclamaciones3'])
            ->setCellValue('H98', $GLOBALS['reclamaciones4'])
            ->setCellValue('H99', $GLOBALS['reclamaciones5'])
            ->setCellValue('H100', $GLOBALS['reclamaciones6'])
            ->setCellValue('A109', $GLOBALS['dormitorios1'])
            ->setCellValue('B109', $GLOBALS['dormitorios2'])
            ->setCellValue('C109', $GLOBALS['habitacion1'])
            ->setCellValue('A112', $GLOBALS['habitacion2'])
            ->setCellValue('B112', $GLOBALS['habitacion3'])
            ->setCellValue('C112', $GLOBALS['habitacion4'])
            ->setCellValue('B117', $GLOBALS['catalogo1'])
            ->setCellValue('B118', $GLOBALS['catalogo2'])
            ->setCellValue('B119', $GLOBALS['catalogo3'])
            ->setCellValue('B124', $GLOBALS['estrellas1'])
            ->setCellValue('B125', $GLOBALS['estrellas2'])
            ->setCellValue('B126', $GLOBALS['estrellas3'])
            ->setCellValue('A132', $GLOBALS['calidad_precio1'])
            ->setCellValue('B132', $GLOBALS['calidad_precio2'])
            ->setCellValue('C132', $GLOBALS['calidad_precio3'])
            ->setCellValue('D132', $GLOBALS['calidad_precio4'])
            ->setCellValue('E132', $GLOBALS['calidad_precio5'])
            ->setCellValue('B142', $GLOBALS['operador1'])
            ->setCellValue('B143', $GLOBALS['operador2'])
            ->setCellValue('B144', $GLOBALS['operador3'])
            ->setCellValue('B145', $GLOBALS['operador4'])
            ->setCellValue('B146', $GLOBALS['operador5'])
            ->setCellValue('B147', $GLOBALS['operador6'])
            ->setCellValue('B148', $GLOBALS['operador7'])
            ->setCellValue('B149', $GLOBALS['operador8'])
            ->setCellValue('B150', $GLOBALS['operador9'])
            ->setCellValue('B151', $GLOBALS['operador10'])
            ->setCellValue('B152', $GLOBALS['operador11'])
            ->setCellValue('B153', $GLOBALS['operador12'])
            ->setCellValue('B154', $GLOBALS['operador13'])
            ->setCellValue('B155', $GLOBALS['operador14']);

            

// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Resumen_cuestionarios_' . $hotel . '.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
ob_start();
$objWriter->save("php://output");
$xlsData = ob_get_contents();
ob_end_clean();

$response =  array(
        'op' => 'ok',
        'file' => "data:application/vnd.ms-excel;base64,".base64_encode($xlsData)
    );

die(json_encode($response));

    }
}
?>
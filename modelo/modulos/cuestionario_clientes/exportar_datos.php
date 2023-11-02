<?php

include_once $_SESSION['path'] . 'modelo/clases/PHPExcel.php';

class ExportarDatos{
    public function actuar($hotel,$desde,$hasta,$archivo){
        $conexion=BaseDatos::getInstancia()->getConexion();
        $sql="SELECT COUNT(*) FROM `cuestionarios` WHERE `hotel`=:clave1 AND `entrada` BETWEEN :clave2 AND :clave3";
        $peticion=$conexion->prepare($sql);
        $peticion->execute(array(":clave1"=>$hotel,
                                 ":clave2"=>$desde,
                                 ":clave3"=>$hasta));
        $resultado=$peticion->fetchAll(PDO::FETCH_BOTH);
        $peticion->closeCursor();
        $array_solicitud=$resultado;
        foreach ($array_solicitud as $campo) {
          $GLOBALS['numero']= $campo[0];
        }
        $sql="SELECT * FROM `cuestionarios` WHERE `hotel`=:clave1 AND `entrada` BETWEEN :clave2 AND :clave3";
        $peticion=$conexion->prepare($sql);
        $peticion->execute(array(":clave1"=>$hotel,
                                 ":clave2"=>$desde,
                                 ":clave3"=>$hasta));
        $resultado=$peticion->fetchAll(PDO::FETCH_BOTH);
        $peticion->closeCursor();
        $array_solicitud=$resultado;

        $objPHPExcel = new PHPExcel();
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load($archivo);
        $fila=2;

        foreach ($array_solicitud as $campo) {
          $objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, $campo[40])
                                        ->setCellValue('B' . $fila, $campo[41])
                                        ->setCellValue('C' . $fila, $campo[42])
                                        ->setCellValue('D' . $fila, $campo[43])
                                        ->setCellValue('E' . $fila, $campo[44])
                                        ->setCellValue('F' . $fila, $campo[45])
                                        ->setCellValue('G' . $fila, $campo[39])
                                        ->setCellValue('H' . $fila, $campo[32]);
          $fila++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="DatosCuestionarios' . $_GET['hotel'] . '.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0 

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
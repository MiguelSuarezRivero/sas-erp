<?php
require_once '../../../controlador/variables.php';
require_once '../../../modelo/baseDatos.php';
include_once '../../../modelo/modulos/cuestionario_clientes/exportar_datos.php';

ExportarDatos::actuar($_GET['hotel'],$_GET['desde2'],$_GET['hasta2'],$_SESSION['path'] . 'modelo/modulos/cuestionario_clientes/plantilla_exportar.xls');
?>
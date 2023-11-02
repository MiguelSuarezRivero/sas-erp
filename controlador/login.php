<?php
require_once 'controlador.php';
$login=new Login();
$login->validar($_POST['user'],$_POST['pass']);
?>

<?php

if(isset($_POST['vista'])){
   session_start();
   $_SESSION['vista']=$_POST['vista'];
   $_SESSION['vista_anterior']=$_POST['vista_anterior'];
}

 require_once 'controlador.php';
 $acceso = new Acceso();
 $acceso->verificar();
?>
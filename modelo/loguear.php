<?php

require_once 'baseDatos.php';
require_once 'permisos.php';

class Loguear{
	
	public static function enter($user,$pass){
	   $db=BaseDatos::getInstancia()->getConexion();
	   $sql="SELECT * FROM users WHERE BINARY name= :USUARIO AND pass= :PASSWORD";
	   $respuesta=$db->prepare($sql);		
	   $usuario=htmlentities($user);		
	   $password=htmlentities($pass);		
	   $respuesta->bindValue(":USUARIO",$user);		
	   $respuesta->bindValue(":PASSWORD",$pass);		
	   $respuesta->execute();
	   $resultado=$respuesta->rowCount();
	   if ($resultado!=0){			
		   echo "ok";
		   $_SESSION['usuario']=$user;		

		   $_SESSION['status'] = Permisos::status();
		   
		   if(strcmp($_SESSION['status'],'0')==0){
			   $_SESSION['status']="Administrador";
		   }elseif(strcmp($_SESSION['status'],'1')==0){
			   $_SESSION['status']="Recepción";
		   }else{
			   $_SESSION['status']="Tpv";
		   }
		   
	   }else{			
		   echo "error";			
	   }
   }
}
?>
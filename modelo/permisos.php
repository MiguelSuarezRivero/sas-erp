<?php
class Permisos{

    public static function status(){
        $db=BaseDatos::getInstancia()->getConexion();
        $sql="SELECT * FROM `users` WHERE `name`=:valor1";
        $peticion=$db->prepare($sql);	
        $peticion->execute(array(":valor1"=>$_SESSION['usuario']));
        $resultado=$peticion->fetchAll(PDO::FETCH_BOTH);
        $peticion->closeCursor();
        $array_solicitud=$resultado;

            foreach ($array_solicitud as $campo) {
                return $campo[2];
            }
    }
}
?>
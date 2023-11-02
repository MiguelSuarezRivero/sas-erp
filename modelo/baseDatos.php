<?php

class BaseDatos{        

    private $conexion;
    private static $instancia; 

    public static function getInstancia(){
        if(!self::$instancia) 
        { 
            self::$instancia = new self();
        }
        return self::$instancia;
    }
 

    private function __construct(){
        //require_once 'variables.php';
        require_once '/var/www/html/Proyectos/sas-erp/controlador/variables.php';
        try{
            $this->conexion=new PDO("mysql:host=" . $_SESSION['host_bbdd'] . ";dbname=" . $_SESSION['nombre_bbdd'] . "","" . $_SESSION['nombre_usuario'] . "","" . $_SESSION['password'] . "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);           
        }catch(Exception $e){
		    die("Error al conectar con la base de datos: " . $e->getMessage());	                
        } 
       
    }
 
    public function getConexion(){
        return $this->conexion;
    }      
}?>
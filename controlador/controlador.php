<?php

session_start();

class Controlador{

    public function __construct(){
        
        require_once 'variables.php';
    
    }

    public function getVista(){
        return $_SESSION['vista'];
    }

    public function getVistaAnterior(){
        return $_SESSION['vista_anterior'];
    }

    public function getRuta(){
        return $_SESSION['ruta'];
    }

    public function getPath(){
        return $_SESSION['path'];
    }

    
    public function getStyles(){
        return $_SESSION['styles'];
    }

    public function getIcon(){
        return $_SESSION['favicon'];
    }

    public function getJS(){
        return $_SESSION['js'];
    }

}

class Acceso extends Controlador{

    public function verificar(){
        
        if(isset($_SESSION['usuario'])){
            if(isset($_SESSION['vista'])){
               require_once $_SESSION['path'] . $this->getVista();               
            }else{
                require_once $_SESSION['path'] . 'vista/admin/index.php';
            }
            
        }else{
            require_once 'vista/index.php';
        }
    }

    public function verificarAnterior(){

        $_SESSION['vista']= $this->getVistaAnterior();
        $this->verificar();

    }
}

class Login extends Controlador{

    public function __construct(){
        require_once '../modelo/loguear.php';
    }

    public function validar($usuario,$pass){
        Loguear::enter($usuario,$pass);
    }
}

class CuestionarioClientes extends Controlador{

  public function setGenerarInforme($hotel,$desde,$hasta){
      require_once '../modelo/baseDatos.php';
      require_once '../modelo/modulos/cuestionario_clientes/obtener_datos.php';   
      require_once '../modelo/modulos/cuestionario_clientes/generarExcel.php';    
      ObtenerDatos::actuar($hotel,$desde,$hasta);
      GenerarExcel::guardar($_SESSION['path'] . 'modelo/modulos/cuestionario_clientes/plantilla.xls',$hotel,$desde);
    }
}

class ControladorModulos extends Controlador{

    
    public $array;

    public function __construct($a){

        $this->array=$a;
        
    }

    public function ejecutar(){

        if(strcmp($this->array[0],'CCGE')==0){
            require_once '../modelo/baseDatos.php';
            require_once '../modelo/modulos/cuestionario_clientes/obtener_datos.php';   
            require_once '../modelo/modulos/cuestionario_clientes/generarExcel.php';    
            ObtenerDatos::actuar($this->array[1],$this->array[2],$this->array[3]);
            GenerarExcel::guardar($_SESSION['path'] . 'modelo/modulos/cuestionario_clientes/plantilla.xls',$this->array[1],$this->array[2]);
            
        }
        
        if(strcmp($this->array[0],'CCED')==0){
            require_once '../modelo/baseDatos.php';
            require_once '../modelo/modulos/cuestionario_clientes/exportar_datos.php';
echo 'hola';
            ExportarDatos::actuar($this->array[1],$this->array[2],$this->array[3],$_SESSION['path'] . 'modelo/modulos/cuestionario_clientes/plantilla_exportar.xls');


        }
    }

}
?>
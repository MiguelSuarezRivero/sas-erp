$(document).ready(function () {
    
    //BOTONES BARRA SUPERIOR
    $('.inicio').click(function(){
        var datos={vista:"vista/admin/index.php"};
        $.post("controlador/acceso.php", datos,procesaVista);
    });

    $('.cerrar').click(function(){
        $.post("controlador/cerrar_sesion.php", null,procesaVista);
    });

    $('.atras').click(function(){
        $.post("controlador/atras.php", null,procesaVista);
    });

    $('.cuestionario_para_clientes').click(function(){
        var datos={vista:"vista/admin/modulos/cuestionario_clientes/cuestionario_clientes.php"};
        $.post("controlador/acceso.php", datos,procesaVista);
    });
   

    function procesaVista(e){   
        location.reload();
    }

});
$(document).ready(function () {
    
    //Evalua si el usuario y contraseña es correcto.    
    $('#form_cpanel').keypress(function (e) { 
        if(e.which == 13) {
            $(".nombre").removeClass("error"); 
		    $(".contra").removeClass("error");
            var datos={user:$('.nombre').val(),
                       pass:$('.contra').val()};
            $.post("controlador/login.php", datos,procesaPost);
         }
    });  

    function procesaPost(devuelto){
        if(devuelto=='ok'){
            location.reload();          
        }else{
            $(".nombre").addClass("error"); 
		    $(".contra").addClass("error");
        }
    }

});
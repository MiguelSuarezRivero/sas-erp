<?php

function cuentaRegistros($nombre_global,$array_solicitud,$num_campo,$valor_campo){

    $GLOBALS[$nombre_global]=0;
    foreach ($array_solicitud as $campo) {
        if($campo[$num_campo]==$valor_campo){
            $GLOBALS[$nombre_global]++;
        }

    }
}
?>
<?php 
include_once 'header.php';

    if(strcmp($_SESSION['status'],'Recepción')==0 || strcmp($_SESSION['status'],'Administrador')==0 ){
        echo '<section>';
        echo    '<article class="cuestionario_para_clientes" >
                    <div></div>
                        <p>Cuestionario para clientes</p>
                        <p>Rellena cuestionarios o genera informes de los mismos.</p>
                </article>';           
        echo '</section>';
    }

include_once 'footer.php';
?>
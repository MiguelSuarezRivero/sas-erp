<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_SESSION['styles']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo  $_SESSION['favicon']; ?>">
    <title>Sand & Sea | ERP</title>
</head>
<body>
<header>
    <div class="barra_superior">
        <span></span>
        <p><?php echo $_SESSION['usuario'] . " | " . $_SESSION['status']; ?></p>
        <?php 

            if(isset($_SESSION['vista'])){
                if(strcmp($_SESSION['vista'],'vista/admin/index.php')!=0){
                    echo '<div class="atras">
                    <svg version="1.1" x="0px" y="0px"
                        viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                    <g>
                        <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                            c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                    </g>
                    </svg>
                </div>
                <div class="inicio">
                    <svg version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M506.555,208.064L263.859,30.367c-4.68-3.426-11.038-3.426-15.716,0L5.445,208.064
                                c-5.928,4.341-7.216,12.665-2.875,18.593s12.666,7.214,18.593,2.875L256,57.588l234.837,171.943c2.368,1.735,5.12,2.57,7.848,2.57
                                c4.096,0,8.138-1.885,10.744-5.445C513.771,220.729,512.483,212.405,506.555,208.064z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M442.246,232.543c-7.346,0-13.303,5.956-13.303,13.303v211.749H322.521V342.009c0-36.68-29.842-66.52-66.52-66.52
                                s-66.52,29.842-66.52,66.52v115.587H83.058V245.847c0-7.347-5.957-13.303-13.303-13.303s-13.303,5.956-13.303,13.303v225.053
                                c0,7.347,5.957,13.303,13.303,13.303h133.029c6.996,0,12.721-5.405,13.251-12.267c0.032-0.311,0.052-0.651,0.052-1.036v-128.89
                                c0-22.009,17.905-39.914,39.914-39.914s39.914,17.906,39.914,39.914v128.89c0,0.383,0.02,0.717,0.052,1.024
                                c0.524,6.867,6.251,12.279,13.251,12.279h133.029c7.347,0,13.303-5.956,13.303-13.303V245.847
                                C455.549,238.499,449.593,232.543,442.246,232.543z"/>
                        </g>
                    </g>    
                    </svg>
                </div>';
                }
            }

        ?>
        
        
        <div class="cerrar">
            <svg version="1.1" x="0px" y="0px"
	            viewBox="0 0 31.112 31.112" style="enable-background:new 0 0 31.112 31.112;" xml:space="preserve">
            <polygon points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 
                29.698,31.112 31.112,29.698 16.97,15.556 "/>
            </svg>
        </div>       
    </div>
</header>
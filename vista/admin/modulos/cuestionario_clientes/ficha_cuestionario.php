<?php 
include_once $_SESSION['path'] . "vista/admin/header.php";
?>
<link rel="stylesheet" href="<?php echo $_SESSION['ruta'] . 'vista/admin/modulos/cuestionario_clientes/style.css';?>" >
<style>.barra_superior .atras{display: inline-block;}</style>
<section>
<div class="ficha_cuestionario"> 
    <h1>Cuestionario para clientes</h1>
    <form id="form_cuestionario" method="post">
        <div class="grupo">
            <h2>Hotel</h2>
            <input type="radio" name="hotel" value="Lagos">Lagos de Fañabé Beach Resort<br>
            <input type="radio" name="hotel" value="Olivos">Los Olivos Beach Resort<br>
            <input type="radio" name="hotel" value="SunBay">Sun Bay Villas<br>
            <input type="radio" name="hotel" value="Cardones" required>Los Cardones Boutique Village<br>
        </div>
        <div class="grupo">
            <h2>¿Recomendarías este hotel?</h2>
            <input type="radio" name="recomendaria" value="1">Si<br>
            <input type="radio" name="recomendaria" value="2">No<br>
        </div>
        <div class="grupo">
            <h2>Ha realiazado un viaje</h2>
            <input type="radio" name="acompanamiento" value="1" >Solo/a<br>
            <input type="radio" name="acompanamiento" value="2" >En pareja<br>
            <input type="radio" name="acompanamiento" value="3">En familia<br>
            <input type="radio" name="acompanamiento" value="4">Con amigos<br>
            <input type="radio" name="acompanamiento" value="5">Con niños<br>
            <input type="radio" name="acompanamiento" value="6">Otros<br>
        </div>
        <div class="grupo">
            <h2>Ha realiazado un viaje</h2>
            <input type="radio" name="motivo" value="1" >De sol y playa<br>
            <input type="radio" name="motivo" value="2" >Negocios<br>
            <input type="radio" name="motivo" value="3">Otros<br>
        </div>   
        <div class="grupo">
            <h2>Edad</h2>
            <table style="width:200px">
                <tr>
                    <td><input type="radio" name="edad" value="1" >19-25</td>
                    <td><input type="radio" name="edad" value="2" >26-30</td>
                </tr>
                <tr>
                    <td><input type="radio" name="edad" value="3" >31-35</td>
                    <td><input type="radio" name="edad" value="4" >36-40</td>
                </tr>
                <tr>
                    <td><input type="radio" name="edad" value="5" >41-45</td>
                    <td><input type="radio" name="edad" value="6" >46-50</td>
                </tr>
                <tr>
                    <td><input type="radio" name="edad" value="7" >51-55</td>
                    <td><input type="radio" name="edad" value="8" >56-60</td>
                </tr>
                <tr>
                <td><input type="radio" name="edad" value="9" >61-65</td>
                <td><input type="radio" name="edad" value="10" >66-70</td>
                </tr>
                <tr>
                    <td><input type="radio" name="edad" value="11" >>70</td>
                    <td></td>
                </tr>
            </table>
            
        </div>  
        <div class="grupo fecha">
            <h2>Fecha de entrada</h2>
            <input type="date" id="entrada" required>
        </div>  
        <div class="grupo">
            <h2>Duración del viaje</h2>
            <input type="radio" name="duracion" value="1" >1 / 7 días<br>
            <input type="radio" name="duracion" value="2" >8 / 15 días<br>
            <input type="radio" name="duracion" value="3">16 / 21 días<br>
            <input type="radio" name="duracion" value="4">+ 22 díass<br>
        </div>  
        <div class="grupo">
            <h2>Hotel en general</h2>
            <table style="width:100%">
                <tr>
                    <td>Estado general del hotel</td>
                    <td>
                        <input type="radio" name="estado_hotel" value="1" >
                        <input type="radio" name="estado_hotel" value="2" >
                        <input type="radio" name="estado_hotel" value="3">
                        <input type="radio" name="estado_hotel" value="4">
                        <input type="radio" name="estado_hotel" value="5">
                        <input type="radio" name="estado_hotel" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Limpieza general </td>
                    <td>
                        <input type="radio" name="limpieza_hotel" value="1" >
                        <input type="radio" name="limpieza_hotel" value="2" >
                        <input type="radio" name="limpieza_hotel" value="3">
                        <input type="radio" name="limpieza_hotel" value="4">
                        <input type="radio" name="limpieza_hotel" value="5">
                        <input type="radio" name="limpieza_hotel" value="6" >
                    </td>
                </tr>
                <tr>
                    <td> Para viajes en familia </td>
                    <td>
                        <input type="radio" name="familia_hotel" value="1" >
                        <input type="radio" name="familia_hotel" value="2" >
                        <input type="radio" name="familia_hotel" value="3">
                        <input type="radio" name="familia_hotel" value="4">
                        <input type="radio" name="familia_hotel" value="5">
                        <input type="radio" name="familia_hotel" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Adecuado para minusválidos</td>
                    <td>
                        <input type="radio" name="minus_hotel" value="1" >
                        <input type="radio" name="minus_hotel" value="2" >
                        <input type="radio" name="minus_hotel" value="3">
                        <input type="radio" name="minus_hotel" value="4">
                        <input type="radio" name="minus_hotel" value="5">
                        <input type="radio" name="minus_hotel" value="6" >
                    </td>
                </tr>
            </table>
        </div> 
        <div class="grupo">
            <h2>Gastronomía</h2>
            <table style="width:100%">
                <tr>
                    <td>Variedad de comidas y bebidas</td>
                    <td>
                        <input type="radio" name="variedad_comidas" value="1" >
                        <input type="radio" name="variedad_comidas" value="2" >
                        <input type="radio" name="variedad_comidas" value="3">
                        <input type="radio" name="variedad_comidas" value="4">
                        <input type="radio" name="variedad_comidas" value="5">
                        <input type="radio" name="variedad_comidas" value="6" >

                    </td>
                </tr>
                <tr>
                    <td>Calidad de comidas y bebidas</td>
                    <td>
                        <input type="radio" name="calidad_comidas" value="1" >
                        <input type="radio" name="calidad_comidas" value="2" >
                        <input type="radio" name="calidad_comidas" value="3">
                        <input type="radio" name="calidad_comidas" value="4">
                        <input type="radio" name="calidad_comidas" value="5">
                        <input type="radio" name="calidad_comidas" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Ambiente y decoración</td>
                    <td>
                        <input type="radio" name="decoracion" value="1" >
                        <input type="radio" name="decoracion" value="2" >
                        <input type="radio" name="decoracion" value="3">
                        <input type="radio" name="decoracion" value="4">
                        <input type="radio" name="decoracion" value="5">
                        <input type="radio" name="decoracion" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Limpieza en el restaurante y bares</td>
                    <td>
                        <input type="radio" name="limpieza_bar" value="1" >
                        <input type="radio" name="limpieza_bar" value="2" >
                        <input type="radio" name="limpieza_bar" value="3">
                        <input type="radio" name="limpieza_bar" value="4">
                        <input type="radio" name="limpieza_bar" value="5">
                        <input type="radio" name="limpieza_bar" value="6" >
                    </td>
                </tr>
            </table>
        </div> 
        <div class="grupo">
            <h2>Oferta de tiempo libre</h2>
            <table style="width:100%">
                <tr>
                    <td>Aminación</td>
                    <td>
                        <input type="radio" name="animacion" value="1" >
                        <input type="radio" name="animacion" value="2" >
                        <input type="radio" name="animacion" value="3">
                        <input type="radio" name="animacion" value="4">
                        <input type="radio" name="animacion" value="5">
                        <input type="radio" name="animacion" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Condición y calidad de las piscinas</td>
                    <td>
                        <input type="radio" name="piscinas" value="1" >
                        <input type="radio" name="piscinas" value="2" >
                        <input type="radio" name="piscinas" value="3">
                        <input type="radio" name="piscinas" value="4">
                        <input type="radio" name="piscinas" value="5">
                        <input type="radio" name="piscinas" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Calidad de playa</td>
                    <td>
                        <input type="radio" name="playa" value="1" >
                        <input type="radio" name="playa" value="2" >
                        <input type="radio" name="playa" value="3">
                        <input type="radio" name="playa" value="4">
                        <input type="radio" name="playa" value="5">
                        <input type="radio" name="playa" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Guardería / Parque infantil</td>
                    <td>
                        <input type="radio" name="guarderia" value="1" >
                        <input type="radio" name="guarderia" value="2" >
                        <input type="radio" name="guarderia" value="3">
                        <input type="radio" name="guarderia" value="4">
                        <input type="radio" name="guarderia" value="5">
                        <input type="radio" name="guarderia" value="6" >
                    </td>
                </tr>
            </table>
        </div> 
        <div class="grupo">
            <h2>Habitación</h2>
            <table style="width:100%">
                <tr>
                    <td>Limpieza y cambio de sábanas</td>
                    <td>
                        <input type="radio" name="limpieza_hab" value="1" >
                        <input type="radio" name="limpieza_hab" value="2" >
                        <input type="radio" name="limpieza_hab" value="3">
                        <input type="radio" name="limpieza_hab" value="4">
                        <input type="radio" name="limpieza_hab" value="5">
                        <input type="radio" name="limpieza_hab" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Tamaño de la habitación</td>
                    <td>
                        <input type="radio" name="tam_hab" value="1" >
                        <input type="radio" name="tam_hab" value="2" >
                        <input type="radio" name="tam_hab" value="3">
                        <input type="radio" name="tam_hab" value="4">
                        <input type="radio" name="tam_hab" value="5">
                        <input type="radio" name="tam_hab" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Equipamiento de la habitación</td>
                    <td>
                        <input type="radio" name="equipamiento" value="1" >
                        <input type="radio" name="equipamiento" value="2" >
                        <input type="radio" name="equipamiento" value="3">
                        <input type="radio" name="equipamiento" value="4">
                        <input type="radio" name="equipamiento" value="5">
                        <input type="radio" name="equipamiento" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Tamaño del cuarto de baño</td>
                    <td>
                        <input type="radio" name="tam_bano" value="1" >
                        <input type="radio" name="tam_bano" value="2" >
                        <input type="radio" name="tam_bano" value="3">
                        <input type="radio" name="tam_bano" value="4">
                        <input type="radio" name="tam_bano" value="5">
                        <input type="radio" name="tam_bano" value="6" >
                    </td>
                </tr>
            </table>
        </div> 
        <div class="grupo">
            <h2>Ubicación y alrededores</h2>
            <table style="width:100%">
                <tr>
                    <td>Tiendas en los alrededores</td>
                    <td>
                        <input type="radio" name="tiendas" value="1" >
                        <input type="radio" name="tiendas" value="2" >
                        <input type="radio" name="tiendas" value="3">
                        <input type="radio" name="tiendas" value="4">
                        <input type="radio" name="tiendas" value="5">
                        <input type="radio" name="tiendas" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Transporte público y excursiones</td>
                    <td>
                        <input type="radio" name="transporte" value="1" >
                        <input type="radio" name="transporte" value="2" >
                        <input type="radio" name="transporte" value="3">
                        <input type="radio" name="transporte" value="4">
                        <input type="radio" name="transporte" value="5">
                        <input type="radio" name="transporte" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Restaurantes y bares en la zona</td>
                    <td>
                        <input type="radio" name="bares_zona" value="1" >
                        <input type="radio" name="bares_zona" value="2" >
                        <input type="radio" name="bares_zona" value="3">
                        <input type="radio" name="bares_zona" value="4">
                        <input type="radio" name="bares_zona" value="5">
                        <input type="radio" name="bares_zona" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Ofertas de tiempo libre</td>
                    <td>
                        <input type="radio" name="oferta_tiempo" value="1" >
                        <input type="radio" name="oferta_tiempo" value="2" >
                        <input type="radio" name="oferta_tiempo" value="3">
                        <input type="radio" name="oferta_tiempo" value="4">
                        <input type="radio" name="oferta_tiempo" value="5">
                        <input type="radio" name="oferta_tiempo" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Distancia a la playa</td>
                    <td>
                        <input type="radio" name="dis_playa" value="1" >
                        <input type="radio" name="dis_playa" value="2" >
                        <input type="radio" name="dis_playa" value="3">
                        <input type="radio" name="dis_playa" value="4">
                        <input type="radio" name="dis_playa" value="5">
                        <input type="radio" name="dis_playa" value="6" >
                    </td>
                </tr>
            </table>       
        </div> 
        <div class="grupo">
            <h2>Servicio</h2>
            <table style="width:100%">
                <tr>
                    <td>Amabilidad y afán de ayuda</td>
                    <td>
                        <input type="radio" name="amabilidad" value="1" >
                        <input type="radio" name="amabilidad" value="2" >
                        <input type="radio" name="amabilidad" value="3">
                        <input type="radio" name="amabilidad" value="4">
                        <input type="radio" name="amabilidad" value="5">
                        <input type="radio" name="amabilidad" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Conocimiento de idiomas</td>
                    <td>
                        <input type="radio" name="idiomas" value="1" >
                        <input type="radio" name="idiomas" value="2" >
                        <input type="radio" name="idiomas" value="3">
                        <input type="radio" name="idiomas" value="4">
                        <input type="radio" name="idiomas" value="5">
                        <input type="radio" name="idiomas" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Recepción (Check In & Cheak Out)</td>
                    <td>
                        <input type="radio" name="recepcion" value="1" >
                        <input type="radio" name="recepcion" value="2" >
                        <input type="radio" name="recepcion" value="3">
                        <input type="radio" name="recepcion" value="4">
                        <input type="radio" name="recepcion" value="5">
                        <input type="radio" name="recepcion" value="6" >
                    </td>
                </tr>
                <tr>
                    <td>Competencia en la gestión de reclamaciones</td>
                    <td>
                        <input type="radio" name="reclamaciones" value="1" >
                        <input type="radio" name="reclamaciones" value="2" >
                        <input type="radio" name="reclamaciones" value="3">
                        <input type="radio" name="reclamaciones" value="4">
                        <input type="radio" name="reclamaciones" value="5">
                        <input type="radio" name="reclamaciones" value="6">
                    </td>
                </tr>
            </table>
        </div> 
        <div class="grupo consejos">
            <h2>Consejos, sugerencias o comentarios</h2>
            <textarea placeholder="Escribe aquí los comentarios..." id="comentarios"></textarea>
            </textarea>
           <br>
        </div>
        <div class="grupo">
            <h2>¿Qué tipo de habitación tenía?</h2>
            <input type="radio" name="dormitorios" value="1">1 Dormitorio<br>
            <input type="radio" name="dormitorios" value="2">2 Dormitorios<br>
            <div class="separador"></div>
            <input type="radio" name="habitacion" value="1">Estudio<br>
            <input type="radio" name="habitacion" value="2">Silver<br>
            <input type="radio" name="habitacion" value="3">Gold<br>
            <input type="radio" name="habitacion" value="4">Delux<br>
        </div> 
        <div class="grupo">
            <h2>¿Se correspondía el hotel con el catálogo?</h2>
            <input type="radio" name="catalogo" value="1">Si<br>
            <input type="radio" name="catalogo" value="2">No, es mejor<br>
            <input type="radio" name="catalogo" value="3">No, merece menos estrellas<br>
        </div> 
        <div class="grupo">
            <h2>¿Piensa que las estrellas del hotel son adecuadas?</h2>
            <input type="radio" name="estrellas" value="1">Si<br>
            <input type="radio" name="estrellas" value="2">No, es mejor<br>
            <input type="radio" name="estrellas" value="3">No, merece menos estrellas<br>
        </div> 
        <div class="grupo"> 
             <h2>¿Cómo calificaría la relación calidad-precio?</h2>
            <input type="radio" name="calidad-precio" value="1">Muy bien<br>
            <input type="radio" name="calidad-precio" value="2">Bastante bien<br>
            <input type="radio" name="calidad-precio" value="3">Aceptable<br>
            <input type="radio" name="calidad-precio" value="4">Bastante mal<br>
            <input type="radio" name="calidad-precio" value="5">Muy mal<br>
        </div>
        <div class="grupo"> 
             <h2>¿Con qué touroperador ha viajado?</h2>
            <input type="radio" name="operador" value="1">ITS<br>
            <input type="radio" name="operador" value="2">Alltours<br>
            <input type="radio" name="operador" value="3">V. Arturo<br>
            <input type="radio" name="operador" value="4">Luxair<br>
            <input type="radio" name="operador" value="5">Booking<br>
            <input type="radio" name="operador" value="6">TCNE<br>
            <input type="radio" name="operador" value="7">Interval<br>
            <input type="radio" name="operador" value="8">Eden V.<br>
            <input type="radio" name="operador" value="9">Sunweb<br>
            <input type="radio" name="operador" value="10">Vebeko<br>
            <input type="radio" name="operador" value="11">Apolo<br>
            <input type="radio" name="operador" value="12">Scandi<br>
            <input type="radio" name="operador" value="13">Club<br>
            <input type="radio" name="operador" value="14">Web S&S<br>
        </div>
        <div class="grupo informacion"> 
            <h2>Información opcional</h2>
            <input type="text" name="num_habitacion" placeholder="Número de habitación"><br>
            <input type="text" name="nombre" placeholder="Nombre y apellidos"><br>
            <input type="text" name="calle" placeholder="Calle"><br>
            <input type="text" name="codigo" placeholder="Código postal"><br>
            <input type="text" name="ciudad" placeholder="Ciudad"><br>
            <input type="text" name="pais" placeholder="País de residencia"><br>
            <input type="email" name="email"  placeholder="Email"><br>
        </div>
        <div class="submit">
            <input class="boton" type="submit" value="Guardar">
        </div>
        
    </form>
</div>
</section>
<?php include_once $_SESSION['path'] . 'vista/admin/footer.php'; ?>
<script src="<?php echo $_SESSION['ruta'] . 'vista/admin/modulos/cuestionario_clientes/code.js';?>"></script>
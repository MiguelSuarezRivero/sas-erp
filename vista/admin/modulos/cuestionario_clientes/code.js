$(document).ready(function () {

   $('.ir_ficha_cuestionario').click(function(){
        var datos={vista:"vista/admin/modulos/cuestionario_clientes/ficha_cuestionario.php",
                   vista_anterior:"vista/admin/modulos/cuestionario_clientes/cuestionario_clientes.php"};
        $.post("controlador/acceso.php", datos,procesaVista);
    });
   
    $('.generar_informe').click(function(){
        var datos={vista:"vista/admin/modulos/cuestionario_clientes/generar_informe.php",
                   vista_anterior:"vista/admin/modulos/cuestionario_clientes/cuestionario_clientes.php"};
        $.post("controlador/acceso.php", datos,procesaVista);
    });

    function procesaVista(e){   
        location.reload();
    }
    
    $('#form_cuestionario').submit(function (e) { 
       
        x =  document.getElementById("entrada").required;

        date = new Date($('#entrada').val());
        day = date.getDate();
        month = date.getMonth() + 1;
        year = date.getFullYear();

        datosModificar={hotel:$('input:radio[name=hotel]:checked').val(),
                            recomendaria:$('input:radio[name=recomendaria]:checked').val(),
                            acompanamiento:$('input:radio[name=acompanamiento]:checked').val(),
                            motivo:$('input:radio[name=motivo]:checked').val(),
                            edad:$('input:radio[name=edad]:checked').val(),
                            duracion:$('input:radio[name=duracion]:checked').val(),
                            estado_hotel:$('input:radio[name=estado_hotel]:checked').val(),
                            limpieza_hotel:$('input:radio[name=limpieza_hotel]:checked').val(),
                            familia_hotel:$('input:radio[name=familia_hotel]:checked').val(),
                            minus_hotel:$('input:radio[name=minus_hotel]:checked').val(),
                            variedad_comidas:$('input:radio[name=variedad_comidas]:checked').val(),
                            calidad_comidas:$('input:radio[name=calidad_comidas]:checked').val(),
                            decoracion:$('input:radio[name=decoracion]:checked').val(),
                            limpieza_bar:$('input:radio[name=limpieza_bar]:checked').val(),
                            animacion:$('input:radio[name=animacion]:checked').val(),
                            piscinas:$('input:radio[name=piscinas]:checked').val(),
                            playa:$('input:radio[name=playa]:checked').val(),
                            guarderia:$('input:radio[name=guarderia]:checked').val(),
                            limpieza_hab:$('input:radio[name=hotel]:checked').val(),
                            tam_hab:$('input:radio[name=tam_hab]:checked').val(),
                            equipamiento:$('input:radio[name=equipamiento]:checked').val(),
                            tam_bano:$('input:radio[name=tam_bano]:checked').val(),
                            tiendas:$('input:radio[name=tiendas]:checked').val(),
                            transporte:$('input:radio[name=transporte]:checked').val(),
                            bares_zona:$('input:radio[name=bares_zona]:checked').val(),
                            oferta_tiempo:$('input:radio[name=oferta_tiempo]:checked').val(),
                            dis_playa:$('input:radio[name=dis_playa]:checked').val(),
                            amabilidad:$('input:radio[name=amabilidad]:checked').val(),
                            idiomas:$('input:radio[name=idiomas]:checked').val(),
                            recepcion:$('input:radio[name=recepcion]:checked').val(),
                            reclamaciones:$('input:radio[name=reclamaciones]:checked').val(),
                            dormitorios:$('input:radio[name=dormitorios]:checked').val(),
                            habitacion:$('input:radio[name=habitacion]:checked').val(),
                            catalogo:$('input:radio[name=catalogo]:checked').val(),
                            estrellas:$('input:radio[name=estrellas]:checked').val(),
                            calidad_precio:$('input:radio[name=calidad-precio]:checked').val(),
                            operador:$('input:radio[name=operador]:checked').val(),
                            num_habitacion:$('input:text[name=num_habitacion]').val(),
                            nombre:$('input:text[name=nombre]').val(),
                            calle:$('input:text[name=calle]').val(),
                            codigo:$('input:text[name=codigo]').val(),
                            ciudad:$('input:text[name=ciudad]').val(),
                            pais:$('input:text[name=pais]').val(),
                            email:$("input[name='email']").val(),
                            entrada:[year, month, day].join('-'),
                            comentarios:$('#comentarios').val()};
     
        $.post('controlador/modulos/cuestionario_clientes/guarda_formulario.php', datosModificar, procesarDatosCuestionario);
                            return false;
                    
    });


        $('#generar_informe').submit(function (e) {

            e.preventDefault();
            
            $('#generarInforme').click(function (b) {        
                    
                    b.preventDefault();

                    hotel = $('input:radio[name=hotel]:checked').val();
                    date = new Date($('#desde').val());
                    day = date.getDate();
                    month = date.getMonth() + 1;
                    year = date.getFullYear();
                    value_desde=[year,month,day].join('-');

                    date2 = new Date($('#hasta').val());
                    day2 = date2.getDate();
                    month2 = date2.getMonth() + 1;
                    year2 = date2.getFullYear();
                    value_hasta=[year2,month2,day2].join('-');

                    var array = ['CCGE',hotel,value_desde,value_hasta];

                    if(year>year2 || (year==year2 && month>month2) || (year==year2 && month==month2 && day>day2)){
                        alert('El rango de fechas introducidas no es válido');             
                    }else{

                        $.ajax({
                            type: "POST",
                            url: 'controlador/controlador_modulos.php',
                            data: {'array': JSON.stringify(array)},
                            dataType:'json'
                        }).done(function(data){
                                var $a = $("<a>");
                                $a.attr("href",data.file);
                                $("body").append($a);
                                $a.attr("download","Encuestas " + hotel + " " + value_desde +".xls");
                                $a[0].click(); 
                                $a.remove();                            
                            });    
                    }               
                    
            });
      


        $('#exportarDatos').click(function (b) {        
                
            b.preventDefault();

            value_hotel=$('input:radio[name=hotel]:checked').val();

            date = new Date($('#desde').val());
            day = date.getDate();
            month = date.getMonth() + 1;
            year = date.getFullYear();
            value_desde=[day,month,year].join('/');
            value_desde2=[year,month,day].join('-');

            date2 = new Date($('#hasta').val());
            day2 = date2.getDate();
            month2 = date2.getMonth() + 1;
            year2 = date2.getFullYear();
            value_hasta=[day2,month2,year2 ].join('/');
            value_hasta2=[year2,month2,day2].join('-');

            var array = ['CCED',value_hotel,value_desde2,value_hasta2];

            if(year>year2 || (year==year2 && month>month2) || (year==year2 && month==month2 && day>day2)){
                alert('El rango de fechas introducidas no es válido');             
            }else{
             
              $.ajax({
                type: "POST",
                url: 'controlador/controlador_modulos.php',
                data: {'array': JSON.stringify(array)},
                dataType:'json'
            }).done(function(data){
                alert(data);
                    var $a = $("<a>");
                    $a.attr("href",data.file);
                    $("body").append($a);
                    $a.attr("download","Datos " + value_hotel + ".xls");
                    $a[0].click(); 
                    $a.remove();     
                                          
                }); 
            }
            
    });

     });

    function procesarDatosCuestionario(e){
        
    alert(e);
       }
   
  
});
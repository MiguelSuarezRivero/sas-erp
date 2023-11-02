<?php
include_once $_SESSION['path'] . "vista/admin/header.php";
?>
<link rel="stylesheet" href="<?php echo $_SESSION['ruta'] . 'vista/admin/modulos/cuestionario_clientes/style.css';?>" >
<style>.barra_superior .atras{display: inline-block;}</style>
<section>
    <div class="generar_informe_cuestionarios">
        <h1>Generar informe cuestionarios de clientes</h1>
        <form  id="generar_informe" method="post">
        <div class="grupo">
            <h2>¿Sobre que hotel desea generar el informe?</h2>
            <input type="radio" name="hotel" value="Lagos">Lagos de Fañabé Beach Resort<br>
            <input type="radio" name="hotel" value="Olivos">Los Olivos Beach Resort<br>
            <input type="radio" name="hotel" value="SunBay">Sun Bay Villas<br>
            <input type="radio" name="hotel" value="Cardones" required>Los Cardones Boutique Village<br>
        </div>
        <div class="grupo">
            <h2>¿Sobre que fechas desea generar el informe?</h2>
            Desde <input type="date" name="desde" id="desde" class="desde" required> Hasta 
            <input type="date" name="hasta" id="hasta" class="desde" required>
        </div>
        <div> 
            <input type="submit" value="Generar informe" id="generarInforme">
            <input type="submit" value="Exportar datos" id="exportarDatos">
        </div>
        </form>
    </div>
   
</section>
<?php
include_once $_SESSION['path'] . "vista/admin/footer.php";
?>
<script src="<?php echo $_SESSION['ruta'] . 'vista/admin/modulos/cuestionario_clientes/code.js'; 
?>"></script>

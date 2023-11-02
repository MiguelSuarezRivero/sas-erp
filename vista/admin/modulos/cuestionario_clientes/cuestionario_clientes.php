<?php
include_once $_SESSION['path'] . "vista/admin/header.php";
?>
<link rel="stylesheet" href="<?php echo $_SESSION['ruta'] . 'vista/admin/modulos/cuestionario_clientes/style.css';?>" >
<section class="cuestionario_clientes">
<a href="ficha_cuestionario.php" class="ir_ficha_cuestionario">Rellenar cuestionario</a>
<a href="generar_informe.php" class="generar_informe">Generar informe</a>
</section>

<?php 
include_once $_SESSION['path'] . 'vista/admin/footer.php'; 
?>
<script src="<?php echo $_SESSION['ruta'] . 'vista/admin/modulos/cuestionario_clientes/code.js'; 
?>"></script>


<?php

require 'includes/funciones.php';

incluirTemplate('header');
/* include './includes/templates/header.php' */
?>
<main class="contenedor seccion">
  <h1>Casas y Depas en Venta</h1>
  <?php
  $limite = 10;
  include 'includes/templates/anuncios.php';
  ?>
</main>
<?php
incluirTemplate('footer');
?>
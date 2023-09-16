<?php

require 'includes/funciones.php';

incluirTemplate('header');
/* include './includes/templates/header.php' */
?>
<main class="contenedor seccion">
  <h1>Base HTML</h1>
</main>
<footer class="footer seccion">
  <div class="contenedor contenedor-footer">
    <nav class="navegacion">
      <a href="nosotros.html">Nosotros</a>
      <a href="anuncios.html">Anuncios</a>
      <a href="blog.html">Blog</a>
      <a href="contacto.html">Contacto</a>
    </nav>
  </div>
  <p class="copyright">Todos los derechos Reservados 2021 &copy;</p>
  <?php
  incluirTemplate('footer');
  ?>
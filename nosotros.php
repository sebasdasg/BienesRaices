<?php

require 'includes/funciones.php';

incluirTemplate('header');
/* include './includes/templates/header.php' */
?>
<main class="contenedor seccion">
  <h1>Conoce Sobre Nosotros</h1>
  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 Años de experiencia</blockquote>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel illo
        porro error corporis ipsa sequi? Doloremque molestiae ut vitae odit
        nihil quod distinctio voluptatum impedit veniam velit accusantium
        consequuntur eos odio libero qui temporibus animi quasi ipsa a,
        maiores aliquid? Dicta eum doloremque officiis temporibus quisquam
        quidem. Odit, ducimus facilis!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt rem
        quisquam quaerat. Tempore, reprehenderit esse eius alias, ratione
        est quos unde officia, fugit error at quisquam eaque quod expedita
        voluptate.
      </p>
    </div>
  </div>
</main>

<section class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Blanditiis suscipit fuga illo eaque facere sed harum nam? Dolorum,
        laborum sint! Repellendus eveniet reprehenderit exercitationem
        quidem quos fugiat iusto repellat et!
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Blanditiis suscipit fuga illo eaque facere sed harum nam? Dolorum,
        laborum sint! Repellendus eveniet reprehenderit exercitationem
        quidem quos fugiat iusto repellat et!
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
      <h3>A Tiempo</h3>
      <p>
        Blanditiis suscipit fuga illo eaque facere sed harum nam? Dolorum,
        laborum sint! Repellendus eveniet reprehenderit exercitationem
        quidem quos fugiat iusto repellat et!
      </p>
    </div>
  </div>
</section>

<?php
incluirTemplate('footer');
?>
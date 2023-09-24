<?php

require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);
/* include './includes/templates/header.php' */
?>

<main class="contenedor seccion">
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
</main>
<section class="seccion contenedor">
  <h2>Casas y Depas en Venta</h2>

  <?php
  $limite = 3;
  include 'includes/templates/anuncios.php';
  ?>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver Todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la sala de tus sueños</h2>
  <p>
    Llena el fomrulario de contacto y un asesor se póndra en contacto
    contigo a brevedad
  </p>
  <a href="contacto.html" class="boton-amarillo">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2021</span> por: <span>Admin</span>
          </p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero
          </p>
        </a>
      </div>
    </article>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guia para la decoración de tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2021</span> por: <span>Admin</span>
          </p>
          <p>
            Maximiza el espacio en tu hogar con esa guia, aprende a combinar
            muebles y colores para darle vida a tu espacio
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente fomra, muy buena atención y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Sebastián Guillen -</p>
    </div>
  </section>
</div>

<?php
incluirTemplate('footer');
?>
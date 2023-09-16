<?php

require 'includes/funciones.php';

incluirTemplate('header');
/* include './includes/templates/header.php' */
?>
<main class="contenedor seccion contenido-centrado">
  <h1>Decoración para tu hogar</h1>

  <picture>
    <source srcset="build/img/destacada2.webp" type="image/webp" />
    <source srcset="build/img/destacada2.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad" />
  </picture>

  <p class="informacion-meta">
    Escrito el: <span>20/10/2021</span> por: <span>Admin</span>
  </p>

  <div class="resumen-propiedad">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
      inventore repellat commodi debitis temporibus itaque laboriosam vitae
      tempora corrupti. Quibusdam commodi perferendis non tempora minima?
      Aperiam necessitatibus incidunt corrupti nihil? Non, ex enim eos
      officia, excepturi, perferendis porro dignissimos dolorum magni
      laboriosam incidunt fuga delectus quia unde vitae facere! Sed debitis
      vero id tempora et, minima officiis sequi explicabo maiores sit dolor
      saepe quos cum cupiditate ex ad recusandae illo perspiciatis. Impedit,
      quis ad ab enim minus sunt obcaecati eos accusantium velit numquam
      natus laudantium! Quis veritatis molestiae assumenda laudantium
      ducimus nihil architecto, sunt corporis necessitatibus fugit
      consequuntur blanditiis vitae saepe temporibus eos perspiciatis totam,
      deleniti earum a! Natus id consequuntur animi? Explicabo natus
      voluptate voluptates ad perspiciatis quis voluptatum?
    </p>
  </div>
</main>
<?php
incluirTemplate('footer');
?>
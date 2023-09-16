<?php

require 'includes/funciones.php';

incluirTemplate('header');
/* include './includes/templates/header.php' */
?>
<main class="contenedor seccion">
  <h1>Contacto</h1>

  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" />
  </picture>

  <h2>Llene el Formulario de Contacto</h2>

  <form class="formulario">
    <fieldset>
      <legend>Información Personal</legend>

      <label for="nombre">Nombre</label>
      <input type="text" placeholder="Tu Nombre" id="nombre" />

      <label for="email">E-mail</label>
      <input type="email" placeholder="Tu Email" id="email" />

      <label for="telefono">Teléfono</label>
      <input type="tel" placeholder="Tu Teléfono" id="telefono" />

      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje"></textarea>
    </fieldset>

    <fieldset>
      <legend>Información Sobre la Propiedad</legend>

      <label for="opciones">Vende o Compra:</label>
      <select id="opciones">
        <option value="disable selected">-- Seleccione --</option>
        <option value="Compra">Compra</option>
        <option value="Vende">Vende</option>
      </select>

      <label for="prsupuesto">Precio o presupuesto</label>
      <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" />
    </fieldset>

    <fieldset>
      <legend>Información sobre la propiedad</legend>

      <p>Como desea ser contactado</p>

      <div class="forma-contacto">
        <label for="contactar-telefono">Teléfono</label>
        <input name="contacto" type="radio" value="telefono" id="contactar-telefono" />

        <label for="contactar-email">E-mail</label>
        <input name="contacto" type="radio" value="telefono" id="contactar-email " />
      </div>

      <p>Si eligio teléfono, elija la fecha y la hora</p>

      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" />

      <label for="hora">Hora:</label>
      <input type="time" id="hora" min="'9:00" />
    </fieldset>

    <input type="submit" value="Enviar" class="boton-verde" />
  </form>
</main>
<?php
incluirTemplate('footer');
?>
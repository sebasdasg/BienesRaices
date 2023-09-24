<?php

//Validar la URL por ID 
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header('Location: /bienesraices/anuncios.php');
}

//Base de datos
//Importar base de datos
/* require '../bienesraices/includes/config/database.php'; */
require __DIR__ . '/includes/config/database.php';
$db = conectarDB();

//Obtener los datos de la propiedad
$query = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $query);

if ($resultado->num_rows === 0) {
  header('Location: /bienesraices/index.php');
}

$propiedad = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';

incluirTemplate('header');
/* include './includes/templates/header.php' */
?>
<main class="contenedor seccion contenido-centrado">
  <h1><?php echo $propiedad['titulo']; ?></h1>

  <img loading="lazy" src="/bienesraices/imagenes/<?php echo $propiedad['imagen']; ?>" alt="imagen de la propiedad" />

  <div class="resumen-propiedad">
    <p class="precio">$<?php echo $propiedad['precio']; ?></p>
    <ul class="iconos-caracteristicas">
      <li>
        <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
        <p><?php echo $propiedad['wc']; ?></p>
      </li>
      <li>
        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc" />
        <p><?php echo $propiedad['estacionmiento']; ?></p>
      </li>
      <li>
        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc" />
        <p><?php echo $propiedad['habitaciones']; ?></p>
      </li>
    </ul>
    <p>
      <?php echo $propiedad['descripcion']; ?>
    </p>
  </div>
</main>
<?php
incluirTemplate('footer');
mysqli_close($db);
?>
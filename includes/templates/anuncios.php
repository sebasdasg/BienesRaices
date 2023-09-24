<?php
//Importar base de datos
require __DIR__ . '/../config/database.php';
$db = conectarDB();

//Consultar
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//Obtener Resultados
$resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="anuncio">
            <picture>
                <!-- <source srcset="build/img/anuncio3.webp" type="image/webp" />
                <source srcset="build/img/anuncio3.jpg" type="image/jpg" /> -->
                <img loading="lazy" src="/bienesraices/imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio" />
            </picture>
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
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
                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!-- .contenido-anuncio -->
        </div>
        <!-- anuncio -->
    <?php endwhile; ?>
</div>
<!-- .contenedor-anuncios-->

<?php
//Cerrar sesión de BD
mysqli_close($db);
?>
<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '021817', 'bienesraices_crud');

    if (!$db) {
        echo "Error no se conectó";
        exit;
    }

    return $db;
}

<?php
function __autoload($className) {
//    echo "La clase buscada es: " . $className . "<br>";
    // Para compatibilidad con SOs Linux y similares,
    // convertimos las \ en /.
    $className = str_replace('\\', '/', $className);

    // Definimos la ruta donde tenemos las clases.
    $classPath = __DIR__ . '/app/' . $className . ".php";

//    echo __DIR__;

    require $classPath;
}

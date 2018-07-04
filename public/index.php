<?php
/*
 * Este archivo va a incluir el autoload, definir algunas constantes de base, y arrancar la aplicación.
 */

// Requerimos el autoload.
require __DIR__ . '/../autoload.php';

use Social\Core\App;

// Definimos una constante con la ruta de base de la app.
// Las constantes predefinidas que empiezan y terminan con __ se conocen como "constantes mágicas".
// Se las llama así porque el valor se la constante se carga mágicamente dependiendo del archivo o contexto en el que esté.
// Ej: __DIR__ retorna el directorio del archivo actual.
//define('APP_PATH', 'saraza');
$appPath = realpath(__DIR__ . '/..');
// Transformamos todas las \ en /.
$appPath = str_replace('\\', '/', $appPath);

// Incluimos el archivo de rutas.
require $appPath . '/app/routes.php';

//echo "La variable \$appPath vale: " . $appPath . "<br>";

// Instanciamos nuestra aplicación.
//$app = new \DaVinci\Core\App($appPath);
$app = new App($appPath);
$app->run();

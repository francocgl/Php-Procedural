<?php

namespace Social\Core;

/**
 * Class App
 * @package DaVinci\Core
 *
 * Maneja la lógica de la ejecución de la aplicación.
 */
class App
{
    // Inicialmente, vamos a hacer que la clase app
    // defina propiedades estáticas para todas las
    // carpetas básicas de nuestra app (proyecto,
    // app, public, views).
    public static $rootPath;
    public static $appPath;
    public static $publicPath;
    public static $viewPath;
    public static $urlPath;

    /** @var array La data del controller obtenida de la clase Route. */
    protected $controllerData = [];

    /** @var Object El controller en ejecución. */
    protected $controller;

    /**
     * App constructor.
     * @param string $rootPath La ruta de la raíz del proyecto.
     */
    public function __construct($rootPath)
    {
        // Guardamos la ruta del root que nos pasaron.
        self::$rootPath = $rootPath;
        // Guardamos las otras rutas a partir del root.
        self::$appPath = $rootPath . '/app';
        self::$publicPath = $rootPath . '/public';
        self::$viewPath = $rootPath . '/views';

//        echo "<pre>";
//        print_r($_SERVER);
//        echo "</pre>";

        // Armamos la urk absoluta de nuestra página.
        // Primero, obtenemos la ruta absoluta al
        // index.php
        self::$urlPath = $_SERVER['REQUEST_SCHEME'] .
                        '://' .
                        $_SERVER['SERVER_NAME'] .
                        $_SERVER['PHP_SELF'];
        // Quitamos el /index.php de la ruta.
        self::$urlPath = str_replace('/index.php', '', self::$urlPath);
//        echo "La url absoluta es: " . self::$urlPath;


        // Imprimimos para ver qué hay, las rutas
        // registradas.
//        echo "<pre>";
//        print_r(Route::getRoutes());
//        echo "</pre>";
    }

    /**
     * Arranca la aplicación.
     */
    public function run()
    {
        // Lo primero que hacemos, es parsear la url.
        Request::parse(self::$publicPath);

        // Le pedimos a Request la ruta y el método.
        $route = Request::getRouteUrl();
        $method = Request::getMethod();

        $this->runRoute($method, $route);
    }

    /**
     * @param $method
     * @param $route
     * @throws \Exception
     */
    public function runRoute($method, $route)
    {
        if(Route::routeExists($method, $route)) {
            // Pedimos los datos del controller, para
            // ejecutarlo.
            $this->controllerData = Route::getRouteAction($method, $route);
            $this->callController($this->controllerData);
        } else {
        
            // Lanzamos una Exception, o mostramos una página de 404, o similar.
//            header('HTTP/1.1 404 Not Found');
            throw new \Exception('La URL requerida no existe.');
        }
    }

    /**
     * Ejecuta el controller indicado en $controllerData.
     *
     * @param array $controllerData Los datos del controller. En el índice 0 debe tener el nombre del Controller. En el índice 1 el método.
     */
    public function callController($controllerData)
    {
        // Obtenemos el nombre del controller, y le
        // agregamos el namespace por defecto:
        // DaVinci\Controllers\
        $controllerName = 'Social\\Controllers\\' . $controllerData[0];

        // Obtenemos el método del controller.
        $controllerMethod = $controllerData[1];

//        echo "El controller es: " . $controllerName . "<br>";
        // Instanciamos el controller.
        $this->controller = new $controllerName;

        // Llamamos al método del controller.
        $this->controller->{$controllerMethod}();
    }
}

<?php

namespace Social\View;

use Social\Core\App;

/*
 * Se encarga del renderizado de vistas.
 */
class View
{
    /**
     * @param string $template La ruta a la vista a partir de la carpeta /views, sin la extensión .php
     * @param array $data Los datos a proporcionarle a la vista. El índice de cada item es el nombre de la variable a crear, y su valor, el contenido.
     */
    public static function render($template, $data = [])
    {
        // Calculamos la ruta del template.
        $templatePath = App::$viewPath . '/' . $template . ".php";

        // Recorremos el array de data, y creamos las variables para el template.
        foreach ($data as $varName => $value) {
            ${$varName} = $value;
        }

        // Renderizamos el template.
        require $templatePath;
    }
}

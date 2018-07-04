<?php
use DaVinci\Core\App;
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= isset($_titulo) ? $_titulo : 'Listado de Películas';?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= App::$urlPath;?>/css/estilos.css">
</head>
<body>
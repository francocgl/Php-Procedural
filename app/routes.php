<?php
// Este archivo va a definir TODAS las rutas de
// nuestra app. Es importante ya que con el .htaccess
// hicimos que todas las urls redireccionen al
// index.php

use Social\Core\Route;

// Definimos nuestra primer ruta. :D
Route::addRoute('GET', '/public', 'UsuariosController@index');

Route::addRoute('GET', '/inicio/index', 'UsuariosController@index');
Route::addRoute('GET', '/abm/index', 'UsuariosController@index');
Route::addRoute('GET', '/abm/posts', 'UsuariosController@index');

<?php
use Social\Core\App;
use Social\Model\Usuarios;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de Control</title>
  </head>
  <body>
    <h1>Panel de control</h1>
    <ul>
      <li><a href="#">Usuarios</a></li>
      <li><a href="<?= App::$urlPath; ?>/inicio/posts">Posts</a></li>
    </ul>
    <table border="1">
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Email</th>
      <th>Nacimiento</th>
      <th>Fecha Alta</th>
    </tr>
    <tr>
      <?php foreach( $usuarios as $user) ?>
      <td><?= $user->getNombre(); ?></td>
      <td><?= $user->getApellido(); ?></td>
      <td><?= $user->getEmail(); ?></td>
      <td><?= $user->getFecha_nacimiento(); ?></td>
      <td><?= $user->getFecha_alta(); ?></td>
    </tr>
    </table>
  </body>
</html>

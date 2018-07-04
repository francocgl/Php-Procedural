
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
      <header>
        <h1>Registro</h1>

      </header>

      <main>
        <p>Registrate en la web para poder acceder a nuestra red social.</p>
        <form class="formu" action="#" enctype="multipart/form-data" method="post">
          <div >
            <label>Nombre:
            <input type="text" name="nombre" value="nombre">
          </label>
          </div>
          <div >
            <label>Apellido:
            <input type="text" name="apellido" value="apellido">
            </label>
          </div>
          <div >
            <label>Email:
            <input type="text" name="email" value="email">
            </label>
          </div>
          <div >
            <label>Contraseña:
            <input type="password" name="clave" value="clave">
            </label>
          </div>
          <div>
            <label>Fecha Nacimiento:
            <input type="date" name="" value="">
            </label>
          </div>
          <div>
            Sexo:
            <select  name="sexo">
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
            </select>

          </div>
          <div>
            Estudios:
            <select  name="sexo">
              <option value="1">Primarios</option>
              <option value="2">Secundarios</option>
              <option value="3">Terciarios</option>
              <option value="4">Universitarios</option>
            </select>

          </div>
          <div >
            Sobre Mi:
            <textarea name="descripcion" rows="8" cols="80"></textarea>
          </div>
          <div >
            Imagen Perfil
            <input type="file" name="imagen" value="imagen">
          </div>
          <input type="submit" name="" value="Registrarse">

        </form>
      </main>
  </body>
</html>

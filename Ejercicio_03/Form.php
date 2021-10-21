<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="container">
      <div class="title">
        <h2>Formulario de inscripcion de usuarios</h2>
      </div>
      <form action="confirmacion.php" method="post" class="grid-container">
        <div class="grid-item">Nombre completo</div>
        <div class="grid-item">
          <input type="text" name="txtnombre" id="txtnombre" />
        </div>
        <div class="grid-item">Direccion</div>
        <div class="grid-item">
          <textarea
            name="txtdireccion"
            id="txtdireccion"
            cols="20"
            rows="2"
          ></textarea>
        </div>
        <div class="grid-item">Correo electronico</div>
        <div class="grid-item"> <input type="text" name="txtcorreo" id="txtcorreo"> </div>
        <div class="grid-item">Contraseña</div>
        <div class="grid-item"><input type="password" name="txtpassword" id="txtpassword"></div>
        <div class="grid-item">Confirmar contraseña</div>
        <div class="grid-item"><input type="password" name="txtconfirmpassword" id="txtconfirmpassword"></div>
        <div class="grid-item">Fecha de nacimiento</div>
        <div class="grid-item">
          <input type="date" name="fecha"  />
        </div>
        <div class="grid-item">sexo</div>
        <div class="grid-item" id="sexo">
          <input type="radio" name="sexo" id="hombre" value="Hombre">
          <label for="hombre">Hombre</label>
          <input type="radio" name="sexo" id="mujer" value="Mujer">
          <label for="mujer">Mujer</label>
        </div>
        <div class="grid-item">
          Por favor, elije los temas de interes
        </div>
        <div class="grid-item" id="intereses">
          <input type="checkbox" name="intereses[]" value="Ficcion" id="ficcion">
          <label for="ficcion">Ficcion</label>
          <input type="checkbox" name="intereses[]" value="Terror" id="terror">
          <label for="terror">Terror</label>
          <input type="checkbox" name="intereses[]" value="Accion" id="accion">
          <label for="accion">Accion</label>
          <input type="checkbox" name="intereses[]" value="Comedia" id="comedia">
          <label for="comedia">Comedia</label>
          <input type="checkbox" name="intereses[]" value="Suspenso" id="suspenso">
          <label for="suspenso">Suspenso</label>
        </div>
        <div class="grid-item">Selecciona tus aficiones</div>
        <div class="grid-item">
          <select name="aficiones[]" id="aficiones" multiple>
            <option value="deporteLibre">Deporte-aire-libre</option>
            <option value="musicaPop">Musica Pop</option>
            <option value="gaming">Gaming</option>
            <option value="futbol">Futbol</option>
          </select>
        </div>
        <div class="grid-item" id="formSubmit">
          <input type="submit" value="Siguiente">
        </div>
      </form>
    </div>
    <script src="main.js"></script>
  </body>
</html>

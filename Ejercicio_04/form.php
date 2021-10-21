<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cargar archivos</title>
  </head>
  <body>

    <form enctype="multipart/form-data" action="carga.php" method="POST">

      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />

      Archivos a subir: <input name="archivo" type="file"/>
      <br />
      Seleccione una carpeta:
      <select name="carpeta" id="carpeta">
          <option value="Testing">Testing</option>
          <option value="Desarrollo">Desarrollo Web</option>
          <option value="Estadistica">Estadistica</option>
      </select>
      <br />
      <input type="submit" value="cargar archivos" />
    </form>
  </body>
</html>


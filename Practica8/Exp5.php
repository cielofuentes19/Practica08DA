<html>

<head>
  <title>Formulario de entrada del dato</title>
</head>

<body>
  <form method="post" action="pagina2.php">
    Ingrese su nombre:
    <input type="text" name="nombre">
    <br>
    <input type="submit" value="confirmar">
  </form>
  <?php
 echo "El nombre ingresado es: ";
 echo $_REQUEST['nombre'];
?>

</body>

</html>


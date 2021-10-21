
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Formulario de entrada de datos</title>
</head>
<body>
 <h1>Venta de pasajes</h1>
 <hr/>
 <form method="post" action="Ejercicio_01.php" name="form">
 <label for="nombre">Nombre:</label>
 <input type="text" name="nombre" />
 <br />
 <label for="apellido">Apellido:</label>
 <input type="text" name="apellido" />
 <br />
 <label for="fecha">Fecha de nacimiento</label>
 <input type="date" name="fecha"  />
 <br />
 <label for="destino">Destino</label>
 <input type="text" name="destino">
<br />
 <label for="categoria">Categoria</label>
 <select name="categoria" id="categoria">
    <option value="Primera clase" selected>Primera clase</option>
    <option value="Ejecutiva">Ejecutiva</option>
    <option value="Premium">Premium</option>
    <option value="Turista">Turista</option>
</select>
 <br />
 <br />
 <input type="submit" value="confirmar" />
 </form>
</body>
</html>


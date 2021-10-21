<h1>Datos de la venta</h1>
<hr />
<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNacimiemto = $_POST['fecha'];
$destino = $_POST['destino'];
$categoria = $_POST['categoria'];
$precio = 150;

echo "Nombre: ".$nombre."<br>";
echo "Apellido: ".$apellido."<br>";
echo "Fecha de nacimiento: ".$fechaNacimiemto."<br>";
echo "Destino: ".$destino."<br>";
echo "Categoria: ".$categoria."<br>";
echo "Precio de boleto completo: ".$precio."<br>";


$añoNac = explode('-',$fechaNacimiemto);;
$fechaActual = date("Y");
$edad = $fechaActual - $añoNac[0];


echo "Edad: ".$edad." años";
echo "<br>";

if($edad >= 18)
{
    echo " pasaje completo<br>";
    echo "Total: ".$precio;
}
else
{
    if($edad >= 3 and $edad <= 17)
    {
         echo " 75 % del pasaje completo<br>";
         echo "Total: ".$precio*(75/100);
    }
    else
    {
        if($edad >= 0 and $edad <= 2)
        {
          echo " no paga pasaje";
        }
        else
        {
            echo " edad no valida";
        }
    }
}
?>
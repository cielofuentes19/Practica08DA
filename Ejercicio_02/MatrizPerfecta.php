<?php
$arreglobase = array(1,2,3,4,5,6,7,8,9);
shuffle($arreglobase);

$matriz[0][0]=1;
$matriz[0][1]=2;
$matriz[0][2]=3;
$matriz[1][0]=4;
$matriz[1][1]=5;
$matriz[1][2]=6;
$matriz[2][0]=7;
$matriz[2][1]=8;
$matriz[2][2]=9;

/*
//Arreglo de matriz perfecta
$matriz[0][0]=2;
$matriz[0][1]=9;
$matriz[0][2]=4;
$matriz[1][0]=7;
$matriz[1][1]=5;
$matriz[1][2]=3;
$matriz[2][0]=6;
$matriz[2][1]=1;
$matriz[2][2]=8;
*/

$cont = 0;
for($x=0;$x<=2;$x++){
	for($y=0;$y<=2;$y++){
		$matriz[$x][$y] = $arreglobase[$cont];
		$cont = $cont +1;
	}		
}

$SumFila1 = $matriz[0][0] + $matriz[0][1] + $matriz[0][2];
$SumFila2 = $matriz[1][0] + $matriz[1][1] + $matriz[1][2];
$SumFila3 = $matriz[2][0] + $matriz[2][1] + $matriz[2][2];
$SumColumna1 = $matriz[0][0] + $matriz[1][0] + $matriz[2][0];
$SumColumna2 = $matriz[0][1] + $matriz[1][1] + $matriz[2][1];
$SumColumna3 = $matriz[0][2] + $matriz[1][2] + $matriz[2][2];
$SumDiagonal1 = $matriz[0][0] + $matriz[1][1] + $matriz[2][2];
$SumDiagonal2 = $matriz[2][0] + $matriz[1][1] + $matriz[0][2];

echo "Matriz cuadrada de 3x3";
echo "<br>";
echo "<br>";
for($x=0;$x<=2;$x++){
	for($y=0;$y<=2;$y++){
		echo $matriz[$x][$y]."	|	";
	}
	echo "<br>";
	if($x!=2)
		echo "__  __  __<br>";		
}
echo "<br>";
if($SumFila1 == $SumFila2 and
   $SumFila2 == $SumFila3 and
   $SumFila3 == $SumColumna1 and 
   $SumColumna1 == $SumColumna2 and 
   $SumColumna2 == $SumColumna3 and 
   $SumColumna3 == $SumDiagonal1 and 
   $SumDiagonal1 == $SumDiagonal2
	){
	echo "MATRIZ PERFECTA!!!!<br>";
	echo "la suma de las diagonales, filas y columnas son iguales";
}
else{
	echo "MATRIZ NO PERFECTA<br>";
	echo "la suma de las diagonales, filas y columnas no son iguales";
}
?>
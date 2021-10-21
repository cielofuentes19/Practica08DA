<?php
$carpeta=$_POST['carpeta'];
$dir_subida = 'D:\\xampp\\htdocs\\Codigo_php03\\archivos\\'.$carpeta.'\\';
$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);

/*echo $fichero_subido;*/
echo '<pre>';
if (move_uploaded_file($_FILES['archivo']['tmp_name'], $fichero_subido)) {
    echo "Archivo subido con exito.\n";
} 
else {
    echo "Error...no se pudo subir el archivo \n";
}
$dir_archivos='D:\\xampp\\htdocs\\Codigo_php03\\archivos\\';
mostrarDirectorios($dir_archivos,$carpeta);

function mostrarDirectorios($ruta,$c){
    if (is_dir($ruta)){
        $gestor = opendir($ruta);
        echo "<ul>";
        while (($archivo = readdir($gestor)) !== false)  {
            $ruta_completa = $ruta . "/" . $archivo;
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    mostrarDirectorios($ruta_completa,$c);
                } else {
                    echo "<li><a href='download.php?carpeta=$c&file=$archivo'>" . $archivo . "</a></li>";
                }
            }
        }
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
?>

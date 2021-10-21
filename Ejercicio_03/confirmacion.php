<!DOCTYPE html>
<html lang="en">
<head>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmacion</title>
        <link rel="stylesheet" href="estilo.css">
        <div class="title">
         <h1> confirmacion del registro de usuario </h1>
      </div>
       
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            $nombre=$_POST['txtnombre'];
            $direccion=$_POST['txtdireccion'];
            $correo=$_POST['txtcorreo'];
            $password=$_POST['txtpassword'];
            $confirmPassword=$_POST['txtconfirmpassword'];
            $fecha=$_POST['fecha'];
            $sexo=$_POST['sexo'];
            $intereses=$_POST['intereses'];
            $aficiones=$_POST['aficiones'];

            if($password!=$confirmPassword){
                echo "Las contraseñas coinciden<br>";
                echo "<a href='index.html'>|1
                </a>";
            }else{
        
    ?>
    <div class="container">
        <form action="registrado.php" class="grid-container">
            <div class="grid-item">Nombre completo</div>
            <div class="grid-item">
                <?php echo $nombre ?>
            </div>
            <div class="grid-item">Direccion</div>
            <div class="grid-item">
                <?php echo $direccion ?>
            </div>
            <div class="grid-item">Correo electronico</div>
            <div class="grid-item">
                <?php echo $correo ?>
            </div>
            <div class="grid-item">Contraseña</div>
            <div class="grid-item">
                <?php echo $password ?>
            </div>
            <div class="grid-item">Fecha de nacimiento</div>
            <div class="grid-item">
                <?php
                    echo $_POST['fecha'];
                ?>
            </div>
            <div class="grid-item">Sexo</div>
            <div class="grid-item" id="sexo">
                <?php echo $sexo ?>
            </div>
            <div class="grid-item">
                Temas de interes
            </div>
            <div class="grid-item" id="intereses">
                <?php
                    $interesesString=implode(',',$intereses); 
                    echo $interesesString;
                ?>
            </div>
            <div class="grid-item">Selecciona tus aficiones</div>
            <div class="grid-item">
                <?php 
                    $aficionesString=implode(',',$aficiones);
                    echo $aficionesString;
                ?>
            </div>
            <div class="grid-item" id="formSubmit">
                <input type="submit" value="Confirmar">
            </div>
        </form>
    </div>
    <?php 
            }
        }
    ?>
</body>

</html>


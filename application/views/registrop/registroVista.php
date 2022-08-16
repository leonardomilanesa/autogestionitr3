<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    
    <title>Bienvenido</title>
</head>
<body>

    <div class="container">
        <h1> Inicio de sesión </h1> 
    </div>
    <form method="POST" action="<?php echo base_url('index.php/principal/register')?>">
    <div class= "nombre_user">
        Ingrese su nombre de usuario
        <br>
        <input type= "text" id="nombre_user" name="username" placeholder="su nombre de usuario">
    </div>
    <div class="email">
        Ingrese su email
        <br>
        <input type="email" id="email" name="email" placeholder="su email">
    </div>
    <div class="contraseña">
        Ingrese su contraseña
        <br>
        <input type="password" id="contraseña" name="password" placeholder="su contraseña">
    </div>
    <div class="boton"> 
        <br>
        <input type="submit" name="enviar" value="Iniciar sesión">
    </div>
    
</form>
</body>
</html>
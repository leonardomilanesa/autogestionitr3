<!doctype html>
    <html lang="en">
      <head>
        <title>Autogestion Itr3</title>
 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="vistainicio.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
          #con{
            min-height: 100vh; 
          }
          body{
           /*background-image: url(https://i.pinimg.com/236x/fb/3d/f9/fb3df90a5388e4a9a44405882c908824.jpg);*/
           background-color: #c4b7b7;
          }
        </style>

      </head>
      <body>
          <div class="fondo">
        <div class="container" style="margin-right: 2rem; margin-top: 5rem;">
  <h5 class="card-header w-50" style="background-color: #bcbcbc; ">Autogestión Itr3</h5>
  <div class="card w-50" style="padding-right:50px; padding-left: 50px;">
  <div class="col-lg-10">
  <img class="card-img-left" style="height: 70px;" align="right" srcset="https://itr3.edu.ar/wp-content/uploads/2020/04/cropped-Escudo-ITR3-Net-300x300.png" ><br>
    <div class="card-body">
     
              <form method="POST" action="<?php echo base_url('index.php/principal/validacion_usuario')?>">
              <h1 class="display-5">Login profesores</h1>
                  <p>Registra tus datos</p> 

                  <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control" name="username"
                      placeholder="Ingrese su nombre de usuario" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email"
                      placeholder="Ingrese su email" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password"
                    placeholder="Ingrese su contraseña"/>
            </div> 
            <div class="form-outline mb-4">
            <input name="boton" id="boton" class="btn btn-secondary" type="submit" value="Enviar">
            </div>    
              </form>   
            
      </body>
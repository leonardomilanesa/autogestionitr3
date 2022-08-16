<!doctype html>
<html lang="en">
  <head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <h1>Bienvenido a nuestra página</h1>
  <body>
  <h1>¿Profesor o Alumno?</h1>
   <form method="POST" action="<?php echo base_url('index.php/principal/Profesor')?>">
   <div class="profesor">
        Elegí tu rol
        <br>
        <input type="submit" name="profesor" value="Profesor" href="views/profe/vistaProfe">
    </div> 
    </form>
    <form method="POST" action="<?php echo base_url('index.php/principal/Alumno')?>">
    <div class="alumno">
        <input type="submit" name="alumno" value="Alumno" href="views/alumno/vistaAlumno">
    </div>
    </form>
  </body>
</html>
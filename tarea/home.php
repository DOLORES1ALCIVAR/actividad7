
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <h1 class="text-center p-4"> LISTA DE ESTUDIANTES</h1>
    <div class="container-fluid row">
    <form  class="col4 p-3" method="POST">
        <h3 class="text-center p-3">ESTUDIANTES DE SEXTO SEMESTRE DE TI</h3> 
        <?php
        include "db.php";
        include "registroestu.php";
       
        // ?> <!--  -->
<div class="text-center p-3">
<table class="table">
  <table class="bg-warning">
    <thead class="bg-info">
    
    <div class="media">
   <div class="media-body">
   
    <center>Los estudiantes que esten cursando a sexto semestre es,</center>
    obligatorio las practicas mas conocidas como vinculacion con la sociedad.

    
      <div class="media-body">
        <h5 class="mt-0"></h5>
             </div>
    </div>
  </div>
</div>
<div class="text-center p-3">
     <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">TITULO</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php
    include "db.php";
    $sql=$conexion->query(" select * from lista ");
    while($datos=$sql->fetch_object()){ ?>
     <tr>      
      <td><?=$datos->id?></td>
      <td><?=$datos->nombres ?></td>
      <td><?=$datos->apellidos ?></td>
      <td><?=$datos->direccion ?></td>
      <td><?=$datos->telefono ?></td>
      <td><?=$datos->titulo ?></td>
      <td>
        <a href="" class=btn btn-small btn-warning><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class=btn btn-small btn-danger><i class="fa-solid fa-trash-arrow-up"></i></a>
        
      </td>
    </tr>
    <?php } 
    ?>
       
   
     </tbody>
</table>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio del Site</title>
</head>
<body>
<?php
    include './controladores/modelos.php';
    if(!$_GET){
            include 'nav.php';
            echo 'Hola Este es el inicio';
        }
        else {
            include 'nav.php';
            echo  htmlspecialchars($_GET['modelo']);
                }
?>
    <div class="row">
    <div class="card" style="width: 18rem;">
  <img src=".\imagenes\chevrolet_impala_1967.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chevrolet Impala 1967</h5>
    <p class="card-text">Exclusiva gama de autos de colección, para clientes con gusto vintage. Podrias quedar bien con tu abuelo!.</p>
    <a href="#" class="btn btn-primary">Ir a Autos De Colección</a>
  </div>
  <br>
</div>
<div class="card" style="width: 18rem;">
  <img src=".\imagenes\chevrolet_impala_1967.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chevrolet Impala 1967</h5>
    <p class="card-text">Exclusiva gama de autos de colección, para clientes con gusto vintage. Podrias quedar bien con tu abuelo!.</p>
    <a href="#" class="btn btn-primary">Ir a Autos De Colección</a>
  </div>
</div>    
</div> 

</body>
</html>
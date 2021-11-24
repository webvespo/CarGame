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
</body>
</html>
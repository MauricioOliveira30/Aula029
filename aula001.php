<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./class/Usuario.class.php";
    $usuario1= new Usuario();
    $usuario2=new  Usuario();
    $usuario1->$nome="Maurício";
    echo $usuario1->$nome
    
    ?>
</body>
</html>
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

        include "./class/Cliente.class.php";

        //criar novo cliente - Criar OBJETO

        $c1 = new Cliente();

        $c2 = new Cliente();

        

        $c1->setCliente("0001","pf","999.999.999-99",2000,500);

        //$c2->setCliente("0002","pj","999.999.999/0001-99",5000);

       

       $c1->exibirDadosCliente();

       $c1->sacar(3000);



    ?>

</body>

</html>
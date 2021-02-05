<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <?php

        $servidor = 'localhost';
        $usuario = $_POST['user_login'];
        $senha = $_POST['user_password'];
        $bd = 'aluno3';

        $strcon = mysqli_connect($servidor, $usuario, $senha, $bd);

        (!$strcon) ? die('Erro na conexão!') : ("Login efetuado com sucesso! <br>")

        
    ?>
    
    <p><H1> Bem-vindo! </H1> </p>
    <p> <h2> O que deseja fazer? </h2> </p>
    <a href="formulario.html"> Cadastrar nova pessoa </a>
</body>
</html>
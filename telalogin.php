<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php include 'header.php';?>
<body>
    <div class="container">
        <div class="container-wraper">
            <h1>SUA CONTA FOI CRIADA COM SUCESSO!</h1>

            <?php
            // Geração de número aleatório para login
            $login_aleatorio = mt_rand(100000, 999999);
            ?>

            <p class = "login">Seu login é: <?php echo $login_aleatorio; ?> </p>


            <?php
            // Geração de senha aleatória
            function gerarSenha($tamanho = 10) {
                $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                return substr(str_shuffle($chars), 0, $tamanho);
            }

            $senha_aleatoria = gerarSenha();
            ?>
            <p class="senha">Sua senha é: <?php echo $senha_aleatoria; ?> </p>

            <a class="botao" href="../login/index.php"><button>Realize o Login</button></a>

        </div>
    </div>
    
        

</body>
</html>
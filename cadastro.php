<<?php  
include('../conexao.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<?php include '../login/header.php';?>
<body>
    <div class="container">
        <div class="container-wraper">

    <h2>REALIZE SEU CADASTRO </h2> <br>
    <form action="processar_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br><br>
        
    </form>

    <a class="botao" href="../login/telalogin.php"><button>Cadastre-se</button></a>
</body>
</html>


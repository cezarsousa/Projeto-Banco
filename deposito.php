<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depósito</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php include '../login/header.php';?>
<body>
    <div class="container">
        <div class="container-wraper">

    <h2>Depósito</h2> <br>
    <form action="processar_deposito.php" method="post">
        <label class="textLogin" for="valor">Valor:</label>
        <input class="campo" type="number" id="valor" name="valor" min="1"><br><br>
        
        <input class="botao" type="submit" value="Depósito">
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
    <?php include '../login/header.php';?>
<body>
    <div class="container">
        <div class="container-wraper">
        <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor_deposito = $_POST["valor"];
            $saldo_atual = 500; 
            $novo_saldo = $saldo_atual + $valor_deposito;
            echo "Depósito de $valor_deposito realizado com sucesso. Novo saldo: $novo_saldo";
        }
        ?>
        </div>
    </div>
    
</body>
</html>
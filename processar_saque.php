
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
                $valor_saque = $_POST["valor"];

            
                $saldo_atual = 500; 
                if ($valor_saque > $saldo_atual) {
                    echo "Saldo insuficiente.";
                } else {
                    $novo_saldo = $saldo_atual - $valor_saque;
                    echo "Saque de $valor_saque realizado com sucesso. Novo saldo: $novo_saldo";
                    
                }
            }
            ?>
        </div>
    </div>
    
</body>
</html>
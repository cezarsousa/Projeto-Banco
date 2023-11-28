<?php 
include('../conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Faça seu login";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE login = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("falha na execucao do codigo sql: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

    
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();

            }

        $_SESSION['id'] = $usuario ['id'];
        $_SESSION['nome'] = $usuario ['nome'];
        
            header ("Location: ../operacoes/operacoesbancarias.php");

        }else {
            echo "Falha ao logar, email ou senha incorretos";
        
        }

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Bancário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<?php include 'header.php';?>
<body>
    <div class="container">
        <div class="container-wraper">
            <div class="cabecalho">
                <h2 >Sistema Bancário</h2>
                <p>Realize seu login agora!</p><br>
                <h3>Login</h3>
            </div>
        

        <form class="form" action=""METHOD="POST">
            <label class= "textLogin" for="login">Login:</label>
            <input class="campo" type="text" id="login" name="email" value="" ><br><br>
        
            <label class= "textLogin" for="senha">Senha:</label>
            <input class="campo" type="password" id="senha" name="senha" value="" ><br><br>

            <button class="botao" type="submit">Entrar</button>
            
        </form>
        <a class="botao" href="../cadastro/cadastro.php"><button>Cadastre-se</button></a>
        
        </div>
    </div>
</body>
</html>
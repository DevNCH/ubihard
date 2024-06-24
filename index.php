<?php
    if (isset($_SESSION)) {
        session_start();
        $_SESSION = array();
        session_destroy();
    }

    if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    
        if (strlen($_POST['usuario']) == 0) {
            echo "Preencha seu usuário.";
        } else if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha.";
        } else {
            $nome = $_POST['usuario'];
            $senha = md5($_POST['senha']);
            
            include_once('conexao.php');        
    
            $comando = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha';";
            
            $resultado = mysqli_query($conexao, $comando);

            $usuario = mysqli_fetch_array($resultado);

            if (!$usuario) {
                header("Location: usuario_nao_encontrado.html");
                exit;
            }

            if (!isset($_SESSION)) {
                session_start();

                $_SESSION['id'] = $usuario[0];
                $_SESSION['nome'] = $usuario[2];

                if ($_SESSION['id'] == 4) {
                    header("Location: index_admin.php");
                    exit;
                } else {
                    header("Location: index_usuario.php");
                    exit;
                }
            }
            
            mysqli_close($conexao);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
    </head>
    <body>
        <div class="login-container">
            <h2>Olá, seja bem-vindo à UbiHard!</h2>
            <form id="form" name="cadastro" method="post" autocomplete="on">
                <label class="texto_form" for="usuario">Usuário:</label>
                <input class="caixa" type="text" id="usuario" name="usuario" maxlength="32" required autofocus>
                <br>
                <label class="texto_form" for="senha">Senha:</label>
                <input class="caixa" type="password" id="senha" name="senha" maxlength="32" required autocomplete="off">
                <br><br>
                <input class="botao_3" type="submit" value="Enviar"/>
                <p></p>
                <input class="botao_3" type="reset" name="botao" value="Limpar"/>
                <p></p>
                <a class="botao_3" id="botao_esqueci_senha" href="trocar_senha.html">Esqueci a senha</a>
                <p></p>
                <a class="botao_3" id="botao_cadastro" href="cadastro.html">Cadastre-se</a>
            </form>
        </div>
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>
<?php
    session_start();

    if (isset($_POST["senha"]) OR isset($_POST["senha_dois"])) {
        if (strlen($_POST['senha']) == 0) {
            echo "Preencha seu senha.";
        } else if (strlen($_POST['senha_dois']) == 0) {
            echo "Preencha sua senha.";
        } else {
            $senha = md5($_POST["senha"]);
            $senha_dois = md5($_POST["senha_dois"]);

            $id = $_SESSION['id'];

            include_once("conexao.php");

            $update = "UPDATE usuarios SET senha = '$senha' WHERE id_usuario = $id;";

            if (mysqli_query($conexao, $update)) {
                echo "Senha atualizada com sucesso.";
            } else {
                echo "Erro ". mysqli_connect_error($conexao);
            }

            mysqli_close($conexao);

            if ($id == 4) {
                header("Location: index_admin.php");
                exit;
            } else {
                header("Location: index_usuario.php");
                exit;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insira a nova senha</title>
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
    </head>
    <body>
        <div class="cadastro-container">
            <form method="POST">
                <label class="texto_form" for="senha">Senha:</label>
                <input class="caixa" type="password" id="senha" name="senha" maxlength="32" required autocomplete="off"><br>
                
                <label class="texto_form" for="senha_dois">Confira a senha:</label>
                <input class="caixa" type="password" id="senha_dois" name="senha_dois" maxlength="32" required autocomplete="off"><br><br>

                <input class="botao_3" type="submit" value="Enviar"/><br><br>
                <input class="botao_4" type="reset" name="botao" value="Limpar"/>
            </form>
        </div>
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>
<?php
    include_once("logado_usuario.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
        <title>Pesquisa</title>
    </head>
    <body>
         <div class="login-container">
            <h1>Bem vindo <?php echo $_SESSION["nome"]; ?>!</h1>
            <form name="pesquisa_jogo" action="pesquisar.php" method="post">
                <label for="pesquisa">Pesquisar:</label>
                <input class="caixa" type="text" id="pesquisa" name="pesquisa" required>
                <input class="botao" type="submit" value="Enviar">
            </form>  
            <p><a href="logout.php">Voltar e sair</a></p>
        </div>  
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>
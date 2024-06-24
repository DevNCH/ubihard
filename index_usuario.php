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
                <input class="caixa" type="text" id="pesquisa" name="pesquisa" placeholder="Pesquisar..." required><br>
                <input class="botao" type="submit" value="Buscar">
            </form><br><br>
            <a class="botao_2" href="logout.php">Voltar e sair</a>
        </div>  
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>
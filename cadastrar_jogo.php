<?php
    include_once("logado_admin.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar um jogo</title>
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
    </head>
    <body>
        <h1>Cadastre um jogo:</h1>
        <form name="cadastro" action="action_cadastrar_jogo.php" method="post">
            <label for="nome">Nome do jogo:</label>
            <input type="text" id="nome" name="nome" maxlength="100" required autofocus><br><br>
            
            <label for="descricao">Descrição do jogo:</label>
            <input type="text" id="descricao" name="descricao" maxlength="300" required><br><br>
            
            <label for="valor">Valor do jogo:</label>
            <input type="number" id="valor" name="valor" min=0 step=0.01 required><br><br>

            <label for="plataforma">Plataformas:</label>
            <input type="text" id="plataforma" name="plataforma" maxlength="200" required><br><br>
            
            <label for="desenvolvedora">Desenvolvedora do jogo:</label>
            <input type="text" id="desenvolvedora" name="desenvolvedora" maxlength="50" required><br><br>
            
            <label for="distribuidora">Distribuidora do jogo:</label>
            <input type="text" id="distribuidora" name="distribuidora" maxlength="50" required><br><br>

            <label for="data_lancamento">Data de lançamento:</label>
            <input type="date" id="data_lancamento" name="data_lancamento" min="1900-01-01" max="2024-12-31" required><br><br>

            <label for="link_imagem">Link da imagem (da steam) do jogo:</label>
            <input type="text" id="link_imagem" name="link_imagem" maxlength="500" required><br><br>

            <input type="submit" value="Enviar"/>
            <input type="reset" name="botao" value="Limpar"/>
        </form>
        <a href="index_admin.php">Voltar</a>
    </body>
</html>

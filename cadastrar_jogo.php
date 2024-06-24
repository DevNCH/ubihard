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
        <div class="cadastro-container">
        <h1>Cadastre um jogo:</h1>
        <form name="cadastro" action="action_cadastrar_jogo.php" method="post">
            <input class="caixa" type="text" id="nome" name="nome" maxlength="100" placeholder="Nome" required autofocus><br>
            <input class="caixa" type="text" id="descricao" name="descricao" maxlength="300" placeholder="Descrição" required><br>
            <input class="caixa" type="number" id="valor" name="valor" min=0 step=0.01 placeholder="Valor" required><br>
            <input class="caixa" type="text" id="plataforma" name="plataforma" maxlength="200" placeholder="Plataformas" required><br>
            <input class="caixa" type="text" id="desenvolvedora" name="desenvolvedora" maxlength="50" placeholder="Desenvolvedora" required><br>
            <input class="caixa" type="text" id="distribuidora" name="distribuidora" maxlength="50" placeholder="Distribuidora" required><br>
            <label for="data_lancamento">Lançamento: </label>
            <input class="caixa" type="date" id="data_lancamento" name="data_lancamento" min="1900-01-01" max="2024-12-31" required><br>
            <input class="caixa" type="text" id="link_imagem" name="link_imagem" maxlength="500" placeholder="Link da imagem" required><br><br>

            <input class="botao_3" type="submit" value="Enviar"/><br><br>
            <input class="botao_4" type="reset" name="botao" value="Limpar"/><br><br>
            <a class="botao_2" href="index_admin.php">Voltar</a>   
        </form>
        </div>
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>

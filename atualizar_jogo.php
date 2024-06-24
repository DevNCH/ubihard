<?php
    include_once("logado_admin.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar um jogo</title>
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
    </head>
    <body>
        <div class="cadastro-container">
            <h1>Atualize um jogo:</h1>
            <form action="action_atualizar_jogo.php" name="jogo" method="POST">
                <input class="caixa" type="number" id="id_jogo" name="id_jogo" min=0 placeholder="ID do jogo" required autofocus><br>
                <input class="caixa" type="text" id="nome" name="nome" maxlength="100" placeholder="Nome" required><br>
                <input class="caixa" type="text" id="descricao" name="descricao" maxlength="300" placeholder="Descrição" required><br>
                <input class="caixa" type="number" id="valor" name="valor" min=0 step=0.01 placeholder="Valor" required><br>
                <input class="caixa" type="text" id="plataforma" name="plataforma" maxlength="200" placeholder="Plataforma" required><br>
                <input class="caixa" type="text" id="desenvolvedora" name="desenvolvedora" maxlength="50" placeholder="Desenvolvedora" required><br>
                <input class="caixa" type="text" id="distribuidora" name="distribuidora" maxlength="50" placeholder="Distribuidora" required><br>
                <label for="lancamento">Lançamento: </label>
                <input class="caixa" type="date" id="lancamento" name="lancamento" min="1900-01-01" max="2024-12-31" required><br>
                <input class="caixa" type="text" id="link_imagem" name="link_imagem" maxlength="500" placeholder="Link da imagem" required><br>

                <input class="botao_3" type="submit" value="Enviar"/><br><br>
                <a class="botao_4" href="index_admin.php">Voltar</a>
            </form>
        </div>
        <div>
            <table class="mesa" border="10" style='width:100%'>
                <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Plataformas</th>
                <th>Desenvolvedora</th>
                <th>Distribuidora</th>
                <th>lançamento</th>
                <th>imagem</th>
                </tr>

            <?php
                include_once("conexao.php");

                $comando = "SELECT * FROM jogos";

                $registro = mysqli_query($conexao, $comando);

                while ($resultado = mysqli_fetch_array($registro)) {
                    echo "<tr>";
                    echo "<td>$resultado[0]</td>";
                    echo "<td>$resultado[1]</td>";
                    echo "<td>$resultado[2]</td>";
                    echo "<td>$resultado[3]</td>";
                    echo "<td>$resultado[4]</td>";
                    echo "<td>$resultado[5]</td>";
                    echo "<td>$resultado[6]</td>";
                    echo "<td>$resultado[7]</td>";
                    echo "<td><img src='$resultado[8]'></td>";
                    echo "</tr>";
                }

                mysqli_close($conexao);
            ?>
            </table>
        </div>
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>
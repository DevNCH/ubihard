<?php
    include_once("logado_admin.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar um jogo</title>
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
    </head>
    <body>
        <div class="pesquisar-container">
            <h1>Delete um jogo:</h1>
            <form action="action_deletar_jogo.php" name="jogo" method="POST">
                <input class="caixa" type="number" id="id_jogo" name="id_jogo" min=0 placeholder="ID do jogo" required><br>
                <input class="botao" type="submit" value="Enviar"/><br><br>
                <a class="botao_4" href="index_admin.php">Voltar</a>
            </form><br>
        </div>
        <div class="mesa-container">
            <table class="mesa" border="10">
                <tr>
                <th>Id</th>
                <th>Nome</th>
                </tr>

            <?php
                include_once("conexao.php");

                $comando = "SELECT * FROM jogos";

                $registro = mysqli_query($conexao, $comando);

                while ($resultado = mysqli_fetch_array($registro)) {
                    echo "<tr>";
                    echo "<td>$resultado[0]</td>";
                    echo "<td>$resultado[1]</td>";
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
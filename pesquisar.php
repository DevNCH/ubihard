<?php
    include_once("logado_usuario.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da pesquisa</title>
        <link rel="stylesheet" href="mystyle.css">
        <link rel="icon" type="image/x-icon" href="ubihard_icon.png">
    </head>
    <body>
        <div class="pesquisar-container">
            <form name="pesquisa_jogo" action="pesquisar.php" method="post">
                <input class="caixa" type="text" id="pesquisa" name="pesquisa" placeholder="Pesquisar..." required><br>
                <input class="botao" type="submit" value="Buscar"><br><br>
                <a class="botao_4" href="index_usuario.php">Voltar</a><br><br>
            </form>
        </div>
        <table class="mesa" border="10" style='width:100%'>
            <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Plataformas</th>
            </tr>

        <?php
            $valor = $_POST["pesquisa"];
            
            if (!$valor) {
                header("Location: index_usuario.php");
                exit;
            }
            
            include_once("conexao.php");

            $comando = "SELECT * FROM jogos WHERE nome LIKE '%$valor%';";

            $registro = mysqli_query($conexao, $comando);

            while ($resultado = mysqli_fetch_array($registro)) {
                echo "<tr>";
                echo "<td><img src='$resultado[8]'></td>";
                echo "<td>$resultado[1]</td>";
                echo "<td>R$$resultado[3]</td>";
                echo "<td>$resultado[2]</td>";
                echo "<td>$resultado[4]</td>";
                echo "</tr>";
            }

            mysqli_close($conexao);
        ?>
        </table>
    </body>
    <footer>
        <p>Para falar com o suporte, entre em contato com o número (48)4002-8922 por whatsapp</p>
    </footer>
</html>
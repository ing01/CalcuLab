<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Preço de Custo</title>
</head>

<body>
    <div class="caixa">
        <div class="icone">
            <i class="fa-solid fa-tag"></i>
        </div>
        <h1>Determine o preço de custo de um produto</h1>
        <h3>Com o valor de venda e a porcentagem de lucro, é possível calcular o preço de custo de um produto. Insira os
            dados necessário para descobrir</h3>
        <br>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td>
                        <label>Produto</label>
                    </td>
                    <td>
                        <input type="text" name="produto" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Valor de venda do produto</label>
                    </td>
                    <td>
                        <input type="number" name="venda" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Porcentagem de lucro</label>
                    </td>
                    <td>
                        <input type="number" name="porcentagem" required>
                    </td>
                </tr>
            </table>

            <div class="botoes">
                <button type="submit" name="custo">
                	Calcular
                </button>
            </div>
        </form>
        <br>

        <?php
        if (isset($_POST['custo'])) {
            $Produto = $_POST['produto'];
            $Venda = $_POST['venda'];
            $Porcent = $_POST['porcentagem'];
            $PorcentInt = $Porcent / 100;

            echo '<span class="cor">' . "Produto: " . $Produto . '</span>';
            echo "<br>";
            echo '<span class="cor">' . "Preço de venda: " . $Venda . '</span>';
            echo "<br>";
            echo '<span class="cor">' . "Porcentagem: " . $PorcentInt . '</span>';
            echo "<br>";
            echo '<span class="cor">' . "Preço de custo: " . $Venda - ($Venda * $PorcentInt) . '</span>';
        }
        ?>
        <br>

        <div>
			<a href="javascript:history.back()">Voltar</a>
		</div>
    </div>
</body>

</html>
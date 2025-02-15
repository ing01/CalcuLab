<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/soma.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Soma de dígitos</title>
</head>

<body>
    <div class="caixa">
        <div class="icone">
            <i class="fa-solid fa-circle-plus"></i>
        </div>
        <h1>Soma de dígitos</h1>
        <h3>Insira um número INTEIRO (longo) e mostraremos a soma de todos os dígitos.</h3>
        <h2>Exemplo: 123 = 6</h2>
        <br>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td>
                        <label>Número Inteiro</label>
                    </td>
                    <td>
                        <input type="number" name="numint" required>
                    </td>
            </table>

            <div class="botoes">
                <button type="submit" name="numero">
                	Somar
                </button>
            </div>
        </form>

        <br>
        <?php
        if (isset($_POST['numero'])) {
            $num = $_POST['numint'];
            function sum($num)
            {
                $sum = 0;
                for ($i = 0; $i < strlen($num); $i++) {
                    $sum += $num[$i];
                }
                return $sum;
            }

            echo '<span class="cor">' . "A soma de todos os dígitos do seu número é: " . sum($num) . '</span>';
        }
        ?>
        <br>

        <div>
			<a href="javascript:history.back()">Voltar</a>
		</div>
    </div>

</body>

</html>
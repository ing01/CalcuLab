<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/calculadora.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<title>Calculadora de Áreas</title>
</head>

<body>
	<div class="caixa">
		<h1>Calculadora de áreas</h1>
		<br>
		<div class="icone">
			<i class="fa-regular fa-circle-dot"></i>
		</div>
		<h3>Área de um círculo</h3>
		<br>
		<p>A área de um círculo é calculada por Pi multiplicado por raio ao quadrado.</p>
		<h5>Fórmula: 3.1416 * (Raio²)</h5>
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>PI</label>
					</td>
					<td>
						<input type="number" name="Pi" value="3.1416" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor do Raio</label>
					</td>
					<td>
						<input type="number" step="1" name="Raio" required>
					</td>
					<td>
						<label>Cm²</label>
					</td>
				</tr>
			</table>

			<div class="botoes">
                <button type="submit" name="circulo">
                	Calcular área
                </button>
            </div>
		</form>
		<br>
		<br>

		<?php
		if (isset($_POST['circulo'])) {
			$Raio = $_POST['Raio'];
			$Pi = 3.1416;

			echo '<span class="cor">' . "Pi: " . $Pi . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "Raio: " . $Raio . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "Raio ao quadrado: " . $Raio * $Raio . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "A área do círculo é: " . $Pi * ($Raio * $Raio) . " Cm²" . '</span>';
		}
		?>
		<br>
		<br>
		<div class="icone">
			<i class="fa-solid fa-square-caret-up"></i>
		</div>
		<h3>Área de um triângulo</h3>
		<br>
		<p>A área de um triângulo é calculada pela metade do valor de base multiplicado por altura.</p>
		<h5>Fórmula: (Base * Altura) / 2</h5>
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Valor da Base</label>
					</td>
					<td>
						<input type="number" name="Base" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor da Altura</label>
					</td>
					<td>
						<input type="number" name="Altura" required>
					</td>
				</tr>
			</table>

			<div class="botoes">
                <button type="submit" name="triangulo">
                	Calcular área
                </button>
            </div>
		</form>
		<br>
		<br>

		<?php
		if (isset($_POST['triangulo'])) {
			$Base = $_POST['Base'];
			$Altura = $_POST['Altura'];

			echo '<span class="cor">' . "Base: " . $Base . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "Altura: " . $Altura . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "A área do triângulo é: " . ($Base * $Altura) / 2 . '</span>';
		}
		?>

		<br>
		<br>
		<div class="icone">
			<i class="fa-regular fa-square"></i>
		</div>
		<h3>Área de um quadrado</h3>
		<br>
		<p> Para calcular a área de um quadrado e de um retângulo, todas as medidas devem estar na mesma unidade de
			comprimento.</p>
		<h5>Fórmula: Base * Altura</h5>
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Valor da Base</label>
					</td>
					<td>
						<input type="number" name="BaseQuad" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor da Altura</label>
					</td>
					<td>
						<input type="number" name="AlturaQuad" required>
					</td>
				</tr>
			</table>

			<div class="botoes">
                <button type="submit" name="quadrado">
                	Calcular área
                </button>
            </div>
		</form>
		<br>
		<br>

		<?php
		if (isset($_POST['quadrado'])) {
			$BaseQuad = $_POST['BaseQuad'];
			$AlturaQuad = $_POST['AlturaQuad'];

			echo '<span class="cor">' . "Base: " . $BaseQuad . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "Altura: " . $AlturaQuad . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "A área do quadrado é: " . $BaseQuad * $AlturaQuad . '</span>';
		}
		?>
		
		<br>
		<br>
		<div class="icone">
			<i class="fa-regular fa-rectangle-xmark"></i>
		</div>
		<h3>Área de um retângulo</h3>
		<br>
		<h5>Fórmula: Base * Altura</h5>
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>
						<label>Valor da Base</label>
					</td>
					<td>
						<input type="number" name="BaseRet" required>
					</td>
				</tr>
				<tr>
					<td>
						<label>Valor da Altura</label>
					</td>
					<td>
						<input type="number" name="AlturaRet" required>
					</td>
				</tr>
			</table>

			<div class="botoes">
                <button type="submit" name="retangulo">
                	Calcular área
                </button>
            </div>
		</form>
		<br>
		<br>

		<?php
		if (isset($_POST['retangulo'])) {
			$BaseRet = $_POST['BaseRet'];
			$AlturaRet = $_POST['AlturaRet'];

			echo '<span class="cor">' . "Base: " . $BaseRet . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "Altura: " . $AlturaRet . '</span>';
			echo "<br>";
			echo '<span class="cor">' . "A área do Retângulo é: " . $BaseRet * $AlturaRet . '</span>';
		}
		?>

		<br>
		<br>
		<div>
			<a href="javascript:history.back()">Voltar</a>
		</div>
	</div>
</body>

</html>
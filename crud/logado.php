<?php include("autentica.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/logado.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="background"></div>
    <main>     
        <div class="caixa">
            <h1>Calculab</h1>
            <br>
            <form action="process.php" method="post">
                <div class="form">
                <i class="fa-solid fa-calculator"></i> <a href="calculadora.php">Calculadora de Áreas</a>
                </div>

                <div class="form">
                <i class="fa-solid fa-plus"></i> <a href="soma.php">Soma de dígitos</a>
                </div>	

                <div class="form">
                <i class="fa-solid fa-dollar-sign"></i> <a href="custo.php">Determine o preço de custo de um produto</a>
                </div>	

                <div class="form">
                <i class="fa-solid fa-user"></i> <a href="cadastro.php">Atualizar dados cadastrais</a>
                </div>	
                
                <div class="form">
                <i class="fa-solid fa-person-running"></i> <a href="logout.php">Sair</a>
                </div>
    </main>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
        
    <script src="js/popper.min.js" ></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/logado.js"></script>
</body>
</html>
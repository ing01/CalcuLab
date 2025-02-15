<?php
include("conecta.php");

if (!isset($_SESSION))
    session_start();

if (isset($_SESSION["id_usuario"])) {

    $aux = "disabled";

    $id = $_SESSION["id_usuario"];

    try {

        $sql = "SELECT * FROM `crud` WHERE `id` = '$id'";

        $res = $conn->query($sql)->fetchAll();

        if (count($res) > 0) {
            foreach ($res as $row) {
                $login = $row['usuario'];
                $senha = $row['senha'];
                $email = $row['email'];
            }

        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;

} else {
    $login = "";
    $senha = "";
    $email = "";
    $aux = "";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <script src="js/validar.js"></script>
</head>

<body>
    <main>
        <div class="caixa" id="login">
            <h1>Cadastro</h1>
            <form class="needs-validation" novalidate action="process_cadastro.php" method="post">

                <div class="form form-row">
                    <h5>Usuário</h5>
                    <input class="form-control" type="text" placeholder="Crie um nome de usuário" id="usuario"
                        name="usuario" value="<?= $login ?>" <?= $aux ?> autofocus required><br>
                    <div class="invalid-feedback">
                        Você não criou seu nome de usuário ainda
                    </div>
                </div>
                <br>
                <div class="form form-row">
                    <h5>Senha</h5>
                    <input class="form-control" type=password placeholder="Crie uma senha" id="senha" name="senha"
                        value="<?= $senha ?>" required><br>
                    <div class="invalid-feedback">
                        Proteja sua conta! Crie uma senha forte!
                    </div>
                </div>
                <br>
                <div class="form form-row">
                    <h5>E-mail</h5>
                    <input class="form-control" type="email" placeholder="Insira seu email" id="email" name="email"
                        value="<?= $email ?>" required>
                    <div class="invalid-feedback">
                        Insira seu email!
                    </div>
                </div>
                <br>
                <div class="botoes">
                    <button type="submit">
                        Enviar
                    </button>
                </div>
                <br>
                <div class="registrar">
                    <a href="javascript:history.back()">Voltar</a>
                </div>
                <br>
                <?php
                if (isset($_SESSION["id_usuario"])) {
                    echo "<p><a href='excluir.php?id=$id' class='btn btn-danger'>Excluir a conta</a></p>";
                }
                ?>
            </form>
        </div>
    </main>
    <script src="js/jquery-3.3.1.slim.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
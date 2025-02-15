<?php
include("conecta.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = $_POST["usuario"];
    $senha = $_POST["senha"];

    try {
        $sql = "SELECT * FROM `crud` WHERE `usuario` = ? AND `senha` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$login, $senha]);

        $res = $stmt->fetchAll();

        if ($res) {
            if ($senha === $res[0]['senha']) {
                $_SESSION["id_usuario"] = $res[0]['id'];

                if (isset($_POST["salvar"])) {
                    setcookie("usuario", $login, time() + (86400 * 30), "/");
                    setcookie("senha", $senha, time() + (86400 * 30), "/");
                } else {
                    setcookie("usuario", "", time() - 3600, "/");
                    setcookie("senha", "", time() - 3600, "/");
                }
                
                echo "Usuário autenticado, redirecionando...";
                header("Location: logado.php");
                exit();
            } else {
                echo "<script>
                        alert('Senha incorreta!');
                        window.location = 'index.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Usuário não encontrado!');
                    window.location = 'index.php';
                  </script>";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

$conn = null;
?>

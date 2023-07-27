<?php
    include 'php/conexao.php';

    if(isset($_POST['email']) || isset($_POST['senha'])) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];  

        $sqlUsuario = "SELECT * FROM usuario WHERE email = :email";
        $stmtUsuario = $conn->prepare($sqlUsuario);
        $stmtUsuario->bindParam(':email', $email);
        $stmtUsuario->execute();

        $quantidadeUsuario = $stmtUsuario->rowCount();

        $sqlFuncionario = "SELECT * FROM funcionario WHERE email = :email";
        $sqlFuncionario = $conn->prepare($sqlFuncionario);
        $sqlFuncionario->bindParam(':email', $email);
        $sqlFuncionario->execute();
        $quantidadeFuncionario = $sqlFuncionario->rowCount();


        if ($quantidadeFuncionario == 1) {
            $row = $sqlFuncionario->fetch(PDO::FETCH_ASSOC);
            if ($row['senha'] == $senha) {
                header("Location: tela_funcionario.php");
            } else {
                echo "Senha inválida.";
            }
        } else if ($quantidadeUsuario == 1) {
            $row = $stmtUsuario->fetch(PDO::FETCH_ASSOC);
            if ($row['senha'] == $senha) {
                header("Location: tela_usuario.php?id_usuario=" . $row['id_usuario']);
            } else {
                echo "Senha inválida.";
            }
        } else if ($email == 'admin@gmail.com') {
            if ($senha == 'admin') {
                header("Location: tela_administrador.php");
            } else {
                echo "Senha inválida.";
            }
        } else {
            echo "Falha ao entrar.";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>BiblioTech</title>
</head>
<body>
    <section>
        <div class="img">
            <img src="images/logo_bibliotech.jpg" alt="Logo do sistema">
            <h1>Seja bem-vindo(a)</h1>
        </div>
        <form class="login" action="" method="POST">
            <label for="email">E-mail</label>
            <input class="text" type="email" id="email" name="email" required>

            <label for="senha">Senha</label>
            <input class="text" type="password" id="senha" name="senha" required>

            <button class="button" type="submit">Entrar</button>
        </form>
    </section>
</body>
</html>


<?php
    include_once '..conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $email = $_POST["email"];
        $instituicao = $_POST["instituicao"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmar_senha"];

        if ($senha != $confirmarSenha) {
            echo "As senhas não coincidem.";
        } else {
            $sql = "INSERT INTO professores (nome, matricula, email, id_instituicao, tipo_usuario, senha) 
                    VALUES ('$nome', '$matricula', '$email', '$instituicao', 'Professor', '$senha')";

            $conn->query($sql);
        }
    }
?>
<?php
    include_once '../conexao.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $email = $_POST["email"];
        $instituicaoId = $_POST["instituicao"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmar_senha"];

        if ($senha != $confirmarSenha) {
            echo "As senhas não coincidem.";
        } else {
            $sql = "INSERT INTO usuario (nome, matricula, email, id_instituicao, cpf, telefone, tipo_usuario, senha) 
            VALUES ('$nome', '$matricula', '$email', '$instituicaoId', '$cpf', '$telefone', 'Professor', '$senha')";

            $conn->query($sql);
        }
    }
?>
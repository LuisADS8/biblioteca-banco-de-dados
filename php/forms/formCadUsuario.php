<?php
    include_once '../conexao.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $tipoUsuario = $_POST["tipoUsuario"];
        $instituicaoId = $_POST["instituicao"];
        $matricula = $_POST["matricula"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmar_senha"];

        if ($senha != $confirmarSenha) {
            echo "As senhas não coincidem.";
        } else {
            $sql = "INSERT INTO usuario (nome, matricula, email, id_instituicao, cpf, telefone, tipo_usuario, senha) 
            VALUES ('$nome', '$matricula', '$email', '$instituicaoId', '$cpf', '$telefone', '$tipoUsuario', '$senha')";

            $conn->query($sql);
        }
    }
?>
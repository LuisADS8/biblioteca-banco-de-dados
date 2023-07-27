<?php
    include_once '../conexao.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cargo = $_POST["cargo"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmar_senha"];

        if ($senha != $confirmarSenha) {
            echo "As senhas não coincidem.";
        } else {
            $sql = "INSERT INTO funcionario (nome, email, cargo, senha) 
            VALUES ('$nome', '$email', '$cargo', '$senha')";

            $conn->query($sql);
        }
    }
?>
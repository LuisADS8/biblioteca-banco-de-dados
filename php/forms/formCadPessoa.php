<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $nome = $_POST['nome'];
        $endereco = $_POST['telefone'];  
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST["confirmar_senha"];

        if ($senha != $confirmarSenha) {
            echo "As senhas não coincidem.";
        } else {
            $sql = "INSERT INTO usuario (nome, telefone, email, tipo_usuario, cpf, senha) 
                    VALUES ('$nome', '$endereco', '$email', 'Pessoa', '$cpf', '$senha')";
            $conn->query($sql);
        }
    }   
?>
<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];  
        $email = $_POST['email'];
        $tipo_instituicao = $_POST['tipo_instituicao'];

        $sql = "INSERT INTO instituicao (nome, endereco, email, tipo_instituicao) VALUES ('$nome', '$endereco', '$email', '$tipo_instituicao')";

        $conn->query($sql);
    }   
?>
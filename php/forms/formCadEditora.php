<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $nome = $_POST['nome'];
        $pais = $_POST['pais'];  
        $email = $_POST['email'];
        $website = $_POST['website'];

        $sql = "INSERT INTO editora (nome, pais, email, website) VALUES ('$nome', '$pais', '$email', '$website')";

        $conn->query($sql);
    }   
?>
<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];  
        $pais = $_POST['pais'];
        $instagram = $_POST['instagram'];

        $sql = "INSERT INTO autor (nome, email, pais, instagram) VALUES ('$nome', '$email', '$pais', '$instagram')";

        $conn->query($sql);
    }   
?>
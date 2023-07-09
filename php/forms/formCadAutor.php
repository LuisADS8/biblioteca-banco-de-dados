<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $nome = $_POST['nome'];
        $pais = $_POST['pais'];

        $sql = "INSERT INTO autor (nome, pais) VALUES ('$nome', '$pais')";

        $conn->query($sql);
    }   
?>
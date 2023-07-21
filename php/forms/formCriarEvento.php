<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];  
        $data = $_POST['data'];
        $local = $_POST['local'];

        $sql = "INSERT INTO eventos (titulo, descricao, data, local) VALUES ('$titulo', '$descricao', '$data', '$local')";

        $conn->query($sql);
    }   
?>
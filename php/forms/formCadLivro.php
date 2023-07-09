<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];  
        $genero = $_POST['genero'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $isbn = $_POST['isbn'];

        $sql = "INSERT INTO livro (titulo, subtitulo, genero, autor, editora, isbn) VALUES ('$titulo', '$subtitulo', '$genero', '$autor', '$editora', '$isbn')";

        $conn->query($sql);
    }   
?>
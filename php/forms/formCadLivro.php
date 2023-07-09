<?php
    include_once '../conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];  
        $genero = $_POST['genero'];
        $quantidade = $_POST['quantidade'];
        $autorId = $_POST['autor'];
        $editoraId = $_POST['editora'];
        $isbn = $_POST['isbn'];

        $sql = "INSERT INTO livro (titulo, subtitulo, genero, quantidade, id_autor, id_editora, isbn) VALUES ('$titulo', '$subtitulo', '$genero', '$quantidade', '$autorId', '$editoraId', '$isbn')";

        $conn->query($sql);
    }   
?>
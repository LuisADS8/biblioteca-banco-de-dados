<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_livro, titulo, genero, quantidade FROM livro";
    $result = $conn->query($sql);
    
    $livros = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $livrosTitulo[$row["id_livro"]] = $row["titulo"];
            $livrosGenero[$row["id_livro"]] = $row["genero"];
            $livrosQuantidade[$row["id_livro"]] = $row["quantidade"];
        }
    }
?>
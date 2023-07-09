<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_livro, titulo FROM livro";
    $result = $conn->query($sql);
    
    $livros = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $livros[$row["id_livro"]] = $row["titulo"];
        }
    }
?>
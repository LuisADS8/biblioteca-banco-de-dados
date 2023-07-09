<?php
    include_once './php/conexao.php';

    $sql = "SELECT titulo FROM livro";
    $result = $conn->query($sql);
    
    $livros = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $livros[] = $row["nome"];
        }
    }
?>
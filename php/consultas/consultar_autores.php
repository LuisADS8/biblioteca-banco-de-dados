<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_autor, nome FROM autor";
    $result = $conn->query($sql);
    
    $autores = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $autores[$row["id_autor"]] = $row["nome"];
        }
    }
?>
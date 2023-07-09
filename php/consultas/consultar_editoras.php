<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_editora, nome FROM editora";
    $result = $conn->query($sql);
    
    $editoras = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $editoras[$row["id_editora"]] = $row["nome"];
        }
    }
?>
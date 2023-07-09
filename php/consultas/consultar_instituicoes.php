<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_instituicao, nome FROM instituicao";
    $result = $conn->query($sql);
    
    $instituicoes = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $instituicoes[$row["id_instituicao"]] = $row["nome"];
        }
    }
?>
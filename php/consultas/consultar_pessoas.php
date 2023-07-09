<?php
    include_once './php/conexao.php';

    $sql = "SELECT nome FROM usuario WHERE tipo_usuario LIKE 'Pessoa' ";
    $result = $conn->query($sql);
    
    $pessoas = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $pessoas[] = $row["nome"];
        }
    }
?>
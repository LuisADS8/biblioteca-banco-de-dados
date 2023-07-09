<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_usuario, nome FROM usuario WHERE tipo_usuario LIKE 'Pessoa' ";
    $result = $conn->query($sql);
    
    $pessoas = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $pessoas[$row["id_usuario"]] = $row["nome"];
        }
    }
?>
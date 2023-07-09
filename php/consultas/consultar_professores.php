<?php
    include_once './php/conexao.php';

    $sql = "SELECT nome FROM usuario WHERE tipo_usuario LIKE 'Professor' ";
    $result = $conn->query($sql);
    
    $professores = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $professores[] = $row["nome"];
        }
    }
?>
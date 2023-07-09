<?php
    include_once './php/conexao.php';

    $sql = "SELECT nome FROM usuario WHERE tipo_usuario LIKE 'Alunos' ";
    $result = $conn->query($sql);
    
    $alunos = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $alunos[] = $row["nome"];
        }
    }
?>
<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_usuario, nome FROM usuario WHERE tipo_usuario LIKE 'Aluno' ";
    $result = $conn->query($sql);
    
    $alunos = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $alunos[$row["id_usuario"]] = $row["nome"];
        }
    }
?>
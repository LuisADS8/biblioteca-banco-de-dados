<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_evento, titulo, data, local FROM evento";
    $result = $conn->query($sql);
    
    $eventos = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $eventosTitulo[$row["id_evento"]] = $row["titulo"];
            $eventosData[$row["id_evento"]] = $row["data"];
            $eventosLocal[$row["id_evento"]] = $row["local"];
        }
    }
?>
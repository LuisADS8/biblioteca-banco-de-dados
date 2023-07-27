<?php
    include_once './php/conexao.php';

    $sql = "SELECT id_usuario, nome, email, telefone, tipo_usuario FROM usuario";
    $result = $conn->query($sql);
    
    $usuarios = array();
    if ($result->rowCount() > 0) {
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $usuarios[$row["id_usuario"]] = $row["nome"];
            $usuariosEmail[$row["id_usuario"]] = $row["email"];
            $usuariosTelefone[$row["id_usuario"]] = $row["telefone"];
            $usuariosTipo[$row["id_usuario"]] = $row["tipo_usuario"];
        }
    }
?>
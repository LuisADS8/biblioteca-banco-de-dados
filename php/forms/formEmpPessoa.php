<?php
include_once '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pessoasId = $_POST['pessoas'];
    $livrosId = $_POST['livros'];
    $quantidadeDias = $_POST['quantidadeDias'];

    date_default_timezone_set('America/Sao_Paulo');
    $dataAtual = date('Y-m-d');
    $dataDevolucao = date('Y-m-d', strtotime("+$quantidadeDias days", strtotime($dataAtual)));

    $sqlVerificaQuantidade = "SELECT quantidade FROM livro WHERE id_livro = '$livrosId'";
    $resultado = $conn->query($sqlVerificaQuantidade);
    $livro = $resultado->fetch(PDO::FETCH_ASSOC);
    $quantidadeLivro = $livro['quantidade'];

    if ($quantidadeLivro > 0) {
        $sqlEmprestimo = "INSERT INTO emprestimo (id_usuario, id_livro, data_emprestimo, data_devolucao) VALUES ('$pessoasId', '$livrosId', '$dataAtual', '$dataDevolucao')";
        $conn->query($sqlEmprestimo);

        $sqlAtualizaQuantidade = "UPDATE livro SET quantidade = quantidade - 1 WHERE id_livro = '$livrosId'";
        $conn->query($sqlAtualizaQuantidade);
    } else {
        echo "Não é possível realizar o empréstimo. A quantidade do livro é zero.";
    }
}
?>
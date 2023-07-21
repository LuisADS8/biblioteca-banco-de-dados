<?php 
    include 'php/conexao.php';
    include 'php/consultas/consultar_livros.php';
    include 'php/consultas/consultar_eventos.php';

    //Consultando dados para tabela de empréstimos
    $sqlEmprestimo = "SELECT usuario.nome AS nome_usuario, livro.titulo AS titulo_livro, emprestimo.data_devolucao FROM emprestimo INNER JOIN usuario ON emprestimo.id_usuario = usuario.id_usuario INNER JOIN livro ON emprestimo.id_livro = livro.id_livro WHERE usuario.id_usuario = 3;";
    $resultEmprestimo = $conn->query($sqlEmprestimo);

    //Consultando dados para tabela de reservas
    $sqlReserva = "SELECT usuario.nome AS nome_usuario, livro.titulo AS titulo_livro, reserva.data_reserva FROM reserva INNER JOIN usuario ON reserva.id_usuario = usuario.id_usuario INNER JOIN livro ON reserva.id_livro = livro.id_livro WHERE usuario.id_usuario = 3;";
    $resultReserva = $conn->query($sqlReserva);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/tela_funcionario.css">
    <link rel="stylesheet" href="styles/tela_usuario.css">
    <title>Usuário</title>
</head>
<body>
    <header>
        <img src="images/logo_bibliotech.jpg" alt="Logo da biblioteca">
        <div class="usuarioLogado">
            <img src="images/profile.png" alt="Imagem do usuário">
            <button>Sair</button>
        </div>
    </header>
    <main>
        <section class="navegacao">
            <!-- BOTÃO PARA TELA DE EMPRÉSTIMOS -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimos')">Empréstimos</button>

            <!-- BOTÃO PARA TELA DE RESERVAS -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaReservas')">Reservas</button>

            <!-- BOTÃO PARA TELA DE LIVROS DISPONÍVEIS -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaLivros')">Livros disponíveis</button>

            <!-- BOTÃO PARA TELA DE EVENTOS -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEventos')">Eventos</button>
        </section>

        <section class="telaRequerida">
            <!-- TELA DE EMPRÉSTIMOS -->
            <div id="telaEmprestimos" class="tela telaPersonalizacao">
                <table>
                    <tr>
                        <th>Usuário</th>
                        <th>Livro</th>
                        <th>Dias restantes</th>
                        <th>Data devolução</th>
                    </tr>
                    <?php while ($row = $resultEmprestimo->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['nome_usuario']; ?></td>
                            <td><?php echo $row['titulo_livro']; ?></td>
                            <?php
                                $dataDevolucao = strtotime($row['data_devolucao']);
                                $dataAtual = strtotime(date('Y-m-d'));
                                $diasRestantes = ceil(($dataDevolucao - $dataAtual) / (60 * 60 * 24));

                                if ($diasRestantes < 0) {
                                    $diasRestantes = 0;
                                }
                            ?>
                            <td <?php if ($diasRestantes <= 5 && $diasRestantes >= 2) { ?> style="background-color: yellow;" <?php } else if ($diasRestantes <= 1) { ?>  style="background-color: red; color: white;" <?php } ?>>
                            <?php echo $diasRestantes; ?></td>
                            <td><?php echo $row['data_devolucao']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- TELA DE RESERVAS -->
            <div id="telaReservas" class="tela telaPersonalizacao">
                <table>
                    <tr>
                        <th>Usuário</th>
                        <th>Livro</th>
                        <th>Dias restantes</th>
                        <th>Data reserva</th>
                    </tr>
                    <?php while ($row = $resultReserva->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['nome_usuario']; ?></td>
                            <td><?php echo $row['titulo_livro']; ?></td>
                            <?php
                                $dataReserva = strtotime($row['data_reserva']);
                                $dataAtual = strtotime(date('Y-m-d')); 
                                $diasRestantes = ceil(($dataReserva - $dataAtual) / (60 * 60 * 24));

                                if ($diasRestantes < 0) {
                                    $diasRestantes = 0;
                                }
                            ?>
                            <td <?php if ($diasRestantes <= 5 && $diasRestantes >= 2) { ?> style="background-color: yellow;" <?php } else if ($diasRestantes <= 1) { ?>  style="background-color: red; color: white;" <?php } ?>>
                            <?php echo $diasRestantes; ?></td>
                            <td><?php echo $row['data_reserva']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- TELA DE LIVROS DISPONÍVEIS -->
            <div id="telaLivros" class="tela telaPersonalizacao">
                <table>
                    <tr>
                        <th>Livro</th>
                        <th>Gênero</th>
                        <th>Unidades</th>
                    </tr>
                    <?php
                        foreach ($livrosTitulo as $id_livro => $livro) {
                            echo "<tr>"; 
                            echo "<td>$livro</td>"; 
                            echo "<td>$livrosGenero[$id_livro]</td>"; 
                            echo "<td>$livrosQuantidade[$id_livro]</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            <!-- TELA DE EVENTOS -->
            <div id="telaEventos" class="tela telaPersonalizacao">
                <table>
                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Local</th>
                    </tr>
                    <?php
                        foreach ($eventosTitulo as $id_evento => $evento) {
                            echo "<tr>"; 
                            echo "<td>$evento</td>"; 
                            echo "<td>$eventosData[$id_evento]</td>"; 
                            echo "<td>$eventosLocal[$id_evento]</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </section>
    </main>
    <script src="js/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
 
    </script>
</body>
</html>
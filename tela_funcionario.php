<?php 
    include 'php/consultas/consultar_instituicoes.php';
    include 'php/consultas/consultar_pessoas.php';
    include 'php/consultas/consultar_professores.php';
    include 'php/consultas/consultar_alunos.php';
    include 'php/consultas/consultar_livros.php';
    include 'php/consultas/consultar_editoras.php';
    include 'php/consultas/consultar_autores.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/tela_funcionario.css">
    <title>Funcionário</title>
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
            <!-- BOTÃO PARA TELA DE CADASTRAR INSTITUIÇÃO -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroInstituicao')">Cadastrar Instituição</button>

            <!-- BOTÃO PARA TELA DE CADASTRAR PROFESSOR -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroProfessor')">Cadastrar Professor</button>

            <!-- BOTÃO PARA TELA DE CADASTRAR ALUNO -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroAluno')">Cadastrar Aluno</button>

            <!-- BOTÃO PARA TELA DE CADASTRAR PESSOA -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroPessoa')">Cadastrar Pessoa</button>

            <!-- BOTÃO PARA TELA DE CADASTRAR EDITORA -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroEditora')">Cadastrar Editora</button>

            <!-- BOTÃO PARA TELA DE CADASTRAR AUTOR -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroAutor')">Cadastrar Autor</button>

            <!-- BOTÃO PARA TELA DE CADASTRAR LIVRO -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroLivro')">Cadastrar Livro</button>

            <!-- BOTÃO PARA TELA DE REALIZAR EMPRÉSTIMO PARA O PROFESSOR -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimoProfessor')">Empréstimo Professor</button>

            <!-- BOTÃO PARA TELA DE REALIZAR EMPRÉSTIMO PARA O ALUNO -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimoAluno')">Empréstimo Aluno</button>

            <!-- BOTÃO PARA TELA DE REALIZAR EMPRÉSTIMO PARA A PESSOA -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimoPessoa')">Empréstimo Pessoa</button>

            <!-- BOTÃO PARA TELA DE REALIZAR RESERVA PARA O PROFESSOR -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaReservaProfessor')">Reserva Professor</button>

            <!-- BOTÃO PARA TELA DE REALIZAR RESERVA PARA O ALUNO -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaReservaAluno')">Reserva Aluno</button>

            <!-- BOTÃO PARA TELA DE REALIZAR RESERVA PARA A PESSOA -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaReservaPessoa')">Reserva Pessoa</button>

            <!-- BOTÃO PARA CRIAR UM EVENTO -->
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCriarEvento')">Criar Evento</button>
        </section>

        <section class="telaRequerida">
        <!-- TELA DE CADASTRAR INSTITUIÇÃO -->
            <div id="telaCadastroInstituicao" class="tela telaPersonalizacao">
                <form id="form-instituicao" method="POST">
                    <label for="nome">Nome da Instituição:</label>
                    <input type="text" id="nomeInstituicao" name="nome" required>
                    
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="enderecoInstituicao" name="endereco" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailInstituicao" name="email" required>
                    
                    <label for="tipo_instituicao">Tipo da Instituição:</label>
                    <select id="tipo_instituicaoInstituicao" name="tipo_instituicao">
                      <option value="particular">Particular</option>
                      <option value="publica">Pública</option>
                    </select>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

        <!-- TELA DE CADASTRAR PROFESSOR -->
            <div id="telaCadastroProfessor" class="tela telaPersonalizacao">
                <form id="form-professor" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nomeProfessor" name="nome" required>
                    
                    <label for="matricula">Matrícula:</label>
                    <input type="text" id="matriculaProfessor" name="matricula" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailProfessor" name="email" required>
                    
                    <label for="instituicao">Instituição:</label>
                    <select id="instituicaoProfessor" name="instituicao">
                        <?php
                            foreach ($instituicoes as $id_instituicao => $instituicao) {
                                echo "<option value=\"$id_instituicao\">$instituicao</option>";
                            }
                        ?>
                    </select>

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpfProfessor" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefoneProfessor" name="telefone" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senhaProfessor" name="senha" required>
                    
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senhaProfessor" name="confirmar_senha" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

            <!-- TELA DE CADASTRAR ALUNO -->
            <div id="telaCadastroAluno" class="tela telaPersonalizacao">
                <form id="form-aluno" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nomeAluno" name="nome" required>
                    
                    <label for="matricula">Matrícula:</label>
                    <input type="text" id="matriculaAluno" name="matricula" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailAluno" name="email" required>
                    
                    <label for="instituicao">Instituição:</label>
                    <select id="instituicaoAluno" name="instituicao">
                        <?php
                            foreach ($instituicoes as $id_instituicao => $instituicao) {
                                echo "<option value=\"$id_instituicao\">$instituicao</option>";
                            }
                        ?>
                    </select>

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpfAluno" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefoneAluno" name="telefone" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senhaAluno" name="senha" required>
                    
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senhaAluno" name="confirmar_senha" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

            <!-- TELA DE CADASTRAR PESSOA -->
            <div id="telaCadastroPessoa" class="tela telaPersonalizacao">
                <form id="form-pessoa" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nomePessoa" name="nome" required>
                    
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefonePessoa" name="telefone" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailPessoa" name="email" required>

                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpfPessoa" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senhaPessoa" name="senha" required>
                    
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senhaPessoa" name="confirmar_senha" required>
    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

            <!-- TELA DE CADASTRAR EDITORA -->
            <div id="telaCadastroEditora" class="tela telaPersonalizacao">
                <form id="form-editora" method="POST">
                    <label for="nome">Nome da Editora:</label>
                    <input type="text" id="nomeEditora" name="nome" required>
                    
                    <label for="pais">País:</label>
                    <input type="text" id="paisEditora" name="pais" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailEditora" name="email" required>

                    <label for="website">Website:</label>
                    <input type="website" id="websiteEditora" name="website" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

            <!-- TELA DE CADASTRAR AUTOR -->
            <div id="telaCadastroAutor" class="tela telaPersonalizacao">
                <form id="form-autor" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nomeAutor" name="nome" required>

                    <label for="pais">País de origem:</label>
                    <input type="text" id="paisAutor" name="pais" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

            <!-- TELA DE CADASTRAR LIVRO -->
            <div id="telaCadastroLivro" class="tela telaPersonalizacao">
                <form id="form-livro" method="POST">              
                    <label for="titulo">Título:</label>
                    <input type="text" id="tituloLivro" name="titulo" required>

                    <label for="subtitulo">Subtítulo:</label>
                    <input type="text" id="subtituloLivro" name="subtitulo">

                    <label for="genero">Gênero:</label>
                    <input type="text" id="generoLivro" name="genero" required>

                    <label for="quantidade">Quantidade de Livros:</label>
                    <input type="number" id="quantidadeLivro" name="quantidade">
                    
                    <label for="autor">Autor:</label>
                    <select id="autorLivro" name="autor" required>
                    <?php
                        foreach ($autores as $id_autor => $autor) {
                            echo "<option value=\"$id_autor\">$autor</option>";
                        }
                    ?>
                    </select>

                    <label for="editora">Editora:</label>
                    <select id="editoraLivro" name="editora" required>
                    <?php
                        foreach ($editoras as $id_editora => $editora) {
                            echo "<option value=\"$id_editora\">$editora</option>";
                        }
                    ?>
                    </select>

                    <label for="isbn">Código ISBN:</label>
                    <input type="text" id="isbnLivro" name="isbn" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>

            <!-- TELA DE REALIZAR EMPRÉSTIMO PARA O PROFESSOR -->
            <div id="telaEmprestimoProfessor" class="tela telaPersonalizacao">
                <form id="form-emprestimo-professor" method="POST">
                    <label for="professores">Professores:</label>
                        <select id="professoresEmprestimoProfessor" name="professores">
                            <?php
                                foreach ($professores as $id_usuario => $professor) {
                                    echo "<option value=\"$id_usuario\">$professor</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosEmprestimoProfessor" name="livros">
                            <?php
                                foreach ($livrosTitulo as $id_livro => $livro) {
                                    echo "<option value=\"$id_livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <label for="quantidadeDias">Quantidade de dias com o livro:</label>
                    <input type="number" id="quantidadeDiasProfessor" name="quantidadeDias">

                    <button class="botaoConfirmar" type="submit">Realizar Empréstimo</button>
                </form>
            </div>

            <!-- TELA DE REALIZAR EMPRÉSTIMO PARA O ALUNO -->
            <div id="telaEmprestimoAluno" class="tela telaPersonalizacao">
                <form id="form-emprestimo-aluno" method="POST">
                    <label for="alunos">Alunos:</label>
                        <select id="alunosEmprestimoAluno" name="alunos">
                            <?php
                                foreach ($alunos as $id_usuario => $aluno) {
                                    echo "<option value=\"$id_usuario\">$aluno</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosEmprestimoAluno" name="livros">
                            <?php
                                foreach ($livrosTitulo as $id_livro => $livro) {
                                    echo "<option value=\"$id_livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <label for="quantidadeDias">Quantidade de dias com o livro:</label>
                    <input type="number" id="quantidadeDiasAluno" name="quantidadeDias">

                    <button class="botaoConfirmar" type="submit">Realizar Empréstimo</button>
                </form>
            </div>

            <!-- TELA DE REALIZAR EMPRÉSTIMO PARA O PESSOA -->
            <div id="telaEmprestimoPessoa" class="tela telaPersonalizacao">
                <form id="form-emprestimo-pessoa" method="POST">
                    <label for="pessoas">Pessoas:</label>
                        <select id="pessoasEmprestimoPessoa" name="pessoas">
                            <?php
                                foreach ($pessoas as $id_usuario => $pessoa) {
                                    echo "<option value=\"$id_usuario\">$pessoa</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosEmprestimoPessoa" name="livros">
                            <?php
                                foreach ($livrosTitulo as $id_livro => $livro) {
                                    echo "<option value=\"$id_livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <label for="quantidadeDias">Quantidade de dias com o livro:</label>
                    <input type="number" id="quantidadeDiasPessoa" name="quantidadeDias">

                    <button class="botaoConfirmar" type="submit">Realizar Empréstimo</button>
                </form>
            </div>

            <!-- TELA DE REALIZAR RESERVA PARA O PROFESSOR -->
            <div id="telaReservaProfessor" class="tela telaPersonalizacao">
                <form id="form-reserva-professor" method="POST">
                    <label for="alunos">Professores:</label>
                        <select id="alunosReservaProfessor" name="professores">
                            <?php
                                foreach ($professores as $id_usuario => $professor) {
                                    echo "<option value=\"$id_usuario\">$professor</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosReservaProfessor" name="livros">
                            <?php
                                foreach ($livrosTitulo as $id_livro => $livro) {
                                    echo "<option value=\"$id_livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <label for="data">Data da reserva:</label>
                    <input type="date" id="dataReserva" name="data" required>

                    <button class="botaoConfirmar" type="submit">Realizar Reserva</button>
                </form>
            </div>

            <!-- TELA DE REALIZAR RESERVA PARA O ALUNO -->
            <div id="telaReservaAluno" class="tela telaPersonalizacao">
                <form id="form-reserva-aluno" method="POST">
                    <label for="alunos">Alunos:</label>
                        <select id="alunosReservaAluno" name="alunos">
                            <?php
                                foreach ($alunos as $id_usuario => $aluno) {
                                    echo "<option value=\"$id_usuario\">$aluno</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosReservaAluno" name="livros">
                            <?php
                                foreach ($livrosTitulo as $id_livro => $livro) {
                                    echo "<option value=\"$id_livro\">$livro</option>";
                                }
                            ?>
                        </select>

                        <label for="data">Data da reserva:</label>
                    <input type="date" id="dataReserva" name="data" required>

                    <button class="botaoConfirmar" type="submit">Realizar Reserva</button>
                </form>
            </div>

            <!-- TELA DE REALIZAR RESERVA PARA A PESSOA -->
            <div id="telaReservaPessoa" class="tela telaPersonalizacao">
                <form id="form-reserva-pessoa" method="POST">
                    <label for="alunos">Pessoas:</label>
                        <select id="alunosReservaPessoa" name="pessoas">
                            <?php
                                foreach ($pessoas as $id_usuario => $pessoa) {
                                    echo "<option value=\"$id_usuario\">$pessoa</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosReservaPessoa" name="livros">
                            <?php
                                foreach ($livrosTitulo as $id_livro => $livro) {
                                    echo "<option value=\"$id_livro\">$livro</option>";
                                }
                            ?>
                        </select>

                        <label for="data">Data da reserva:</label>
                    <input type="date" id="dataReserva" name="data" required>

                    <button class="botaoConfirmar" type="submit">Realizar Reserva</button>
                </form>
            </div>

            <!-- TELA DE CRIAR EVENTO -->
            <div id="telaCriarEvento" class="tela telaPersonalizacao">
                <form id="form-criar-evento" method="POST">
                    <label for="titulo">Título:</label>
                    <input type="text" id="tituloEvento" name="titulo" required>

                    <label for="descricao">Descrição:</label>
                    <textarea id="descricaoEvento" name="descricao" rows="4" cols="20" required> Evento...</textarea>

                    <label for="data">Data:</label>
                    <input type="date" id="dataEvento" name="data" required>

                    <label for="local">Local:</label>
                    <input type="text" id="localEvento" name="local" required>

                    <button class="botaoConfirmar" type="submit">Criar evento</button>
                </form>
            </div>
        </section>
    </main>
    <script src="js/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //CADASTRO INSTITUIÇÃO
        $(document).ready(function() {
        $('#form-instituicao').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadInstituicao.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('nomeInstituicao').value = '';
                    document.getElementById('enderecoInstituicao').value = '';
                    document.getElementById('emailInstituicao').value = '';
                    document.getElementById('tipo_instituicaoInstituicao').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });
        
        //CADASTRO PROFESSOR
        $(document).ready(function() {
        $('#form-professor').submit(function(e) {
            e.preventDefault();
                
            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadProfessor.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);

                    document.getElementById('nomeProfessor').value = '';
                    document.getElementById('matriculaProfessor').value = '';
                    document.getElementById('emailProfessor').value = '';
                    document.getElementById('instituicaoProfessor').value = '';
                    document.getElementById('cpfProfessor').value = '';
                    document.getElementById('telefoneProfessor').value = '';
                    document.getElementById('senhaProfessor').value = '';
                    document.getElementById('confirmar_senhaProfessor').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //CADASTRO ALUNO
        $(document).ready(function() {
        $('#form-aluno').submit(function(e) {
            e.preventDefault();
                
            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadAluno.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);

                    document.getElementById('nomeAluno').value = '';
                    document.getElementById('matriculaAluno').value = '';
                    document.getElementById('emailAluno').value = '';
                    document.getElementById('instituicaoAluno').value = '';
                    document.getElementById('cpfAluno').value = '';
                    document.getElementById('telefoneAluno').value = '';
                    document.getElementById('senhaAluno').value = '';
                    document.getElementById('confirmar_senhaAluno').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //CADASTRO PESSOA
        $(document).ready(function() {
        $('#form-pessoa').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadPessoa.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('nomePessoa').value = '';
                    document.getElementById('telefonePessoa').value = '';
                    document.getElementById('emailPessoa').value = '';
                    document.getElementById('cpfPessoa').value = '';
                    document.getElementById('senhaPessoa').value = '';
                    document.getElementById('confirmar_senhaPessoa').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //CADASTRO EDITORA
        $(document).ready(function() {
        $('#form-editora').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadEditora.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('nomeEditora').value = '';
                    document.getElementById('paisEditora').value = '';
                    document.getElementById('emailEditora').value = '';
                    document.getElementById('websiteEditora').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //CADASTRO AUTOR
        $(document).ready(function() {
        $('#form-autor').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadAutor.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('nomeAutor').value = '';
                    document.getElementById('paisAutor').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //CADASTRO LIVRO
        $(document).ready(function() {
        $('#form-livro').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCadLivro.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('tituloLivro').value = '';
                    document.getElementById('subtituloLivro').value = '';
                    document.getElementById('generoLivro').value = '';
                    document.getElementById('quantidadeLivro').value = '';
                    document.getElementById('autorLivro').value = '';
                    document.getElementById('editoraLivro').value = '';
                    document.getElementById('isbnLivro').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //EMPRÉSTIMO PROFESSOR
        $(document).ready(function() {
        $('#form-emprestimo-professor').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formEmpProfessor.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('professoresEmprestimoProfessor').value = '';
                    document.getElementById('livrosEmprestimoProfessor').value = '';
                    document.getElementById('quantidadeDiasProfessor').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //EMPRÉSTIMO ALUNO
        $(document).ready(function() {
        $('#form-emprestimo-aluno').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formEmpAluno.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('alunosEmprestimoAluno').value = '';
                    document.getElementById('livrosEmprestimoAluno').value = '';
                    document.getElementById('quantidadeDiasAluno').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //EMPRÉSTIMO PESSOA
        $(document).ready(function() {
        $('#form-emprestimo-pessoa').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formEmpPessoa.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('pessoasEmprestimoPessoa').value = '';
                    document.getElementById('livrosEmprestimoPessoa').value = '';
                    document.getElementById('quantidadeDiasPessoa').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //CRIAR EVENTO
        $(document).ready(function() {
        $('#form-criar-evento').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'php/forms/formCriarEvento.php',
                    data: formData,
                    success: function(response) {
                    console.log(response);
                
                    document.getElementById('tituloEvento').value = '';
                    document.getElementById('descricaoEvento').value = '';
                    document.getElementById('dataEvento').value = '';
                    document.getElementById('localEvento').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
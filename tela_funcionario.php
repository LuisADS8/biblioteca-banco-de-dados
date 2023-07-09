<?php 
    include 'php/consultas/consultar_instituicoes.php';
    include 'php/consultas/consultar_pessoas.php';
    include 'php/consultas/consultar_professores.php';
    include 'php/consultas/consultar_alunos.php';
    include 'php/consultas/consultar_livros.php';
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
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroInstituicao')">Cadastrar Instituição</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroProfessor')">Cadastrar Professor</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroAluno')">Cadastrar Aluno</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroPessoa')">Cadastrar Pessoa</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimoProfessor')">Empréstimo Professor</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimoAluno')">Empréstimo Aluno</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaEmprestimoPessoa')">Empréstimo Pessoa</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroEditora')">Cadastrar Editora</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroAutor')">Cadastrar Autor</button>
            <button class="botao" onclick="ativarBotao(this), exibirTela('telaCadastroLivro')">Cadastrar Livro</button>
        </section>
        <section class="telaRequerida">
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
                            foreach ($instituicoes as $instituicao) {
                                echo "<option value=\"$instituicao\">$instituicao</option>";
                            }
                        ?>
                    </select>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senhaProfessor" name="senha" required>
                    
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senhaProfessor" name="confirmar_senha" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>
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
                            foreach ($instituicoes as $instituicao) {
                                echo "<option value=\"$instituicao\">$instituicao</option>";
                            }
                        ?>
                    </select>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senhaAluno" name="senha" required>
                    
                    <label for="confirmar_senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar_senhaAluno" name="confirmar_senha" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>
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
            <div id="telaEmprestimoProfessor" class="tela telaPersonalizacao">
                <form id="form-emprestimo-professor" method="POST">
                    <label for="professores">Professores:</label>
                        <select id="professorEmprestimoProfessor" name="professores">
                            <?php
                                foreach ($professores as $professor) {
                                    echo "<option value=\"$professor\">$professor</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosEmprestimoProfessor" name="livros">
                            <?php
                                foreach ($livros as $livro) {
                                    echo "<option value=\"$livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <button class="botaoConfirmar" type="submit">Realizar empréstimo</button>
                </form>
            </div>
            <div id="telaEmprestimoAluno" class="tela telaPersonalizacao">
                <form id="form-emprestimo-professor" method="POST">
                    <label for="alunos">Alunos:</label>
                        <select id="alunosEmprestimoAluno" name="alunos">
                            <?php
                                foreach ($alunos as $aluno) {
                                    echo "<option value=\"$aluno\">$aluno</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosEmprestimoAluno" name="livros">
                            <?php
                                foreach ($livros as $livro) {
                                    echo "<option value=\"$livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <button class="botaoConfirmar" type="submit">Realizar empréstimo</button>
                </form>
            </div>
            <div id="telaEmprestimoPessoa" class="tela telaPersonalizacao">
                <form id="form-emprestimo-professor" method="POST">
                    <label for="pessoas">Pessoas:</label>
                        <select id="pessoasEmprestimoPessoa" name="pessoas">
                            <?php
                                foreach ($pessoas as $pessoa) {
                                    echo "<option value=\"$pessoa\">$pessoa</option>";
                                }
                            ?>
                        </select>
                    <label for="livros">Livros:</label>
                        <select id="livrosEmprestimoPessoa" name="livros">
                            <?php
                                foreach ($livros as $livro) {
                                    echo "<option value=\"$livro\">$livro</option>";
                                }
                            ?>
                        </select>

                    <button class="botaoConfirmar" type="submit">Realizar empréstimo</button>
                </form>
            </div>
            <div id="telaCadastroAutor" class="tela telaPersonalizacao">
                <form id="form-autor" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nomeAutor" name="nome" required>
                    
                    <label for="email">E-mail:</label>
                    <input type="email" id="emailAutor" name="email" required>

                    <label for="nome">País de origem:</label>
                    <input type="text" id="paisAutor" name="pais" required>
                    
                    <label for="instagram">Usuário do Instagram:</label>
                    <input type="text" id="instagramAutor" name="instagram">
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>
            <div id="telaCadastroLivro" class="tela telaPersonalizacao">
                <form id="form-livro" method="POST">              
                    <label for="titulo">Título:</label>
                    <input type="text" id="tituloLivro" name="titulo" required>

                    <label for="subtitulo">Subtítulo:</label>
                    <input type="text" id="subtituloLivro" name="subtitulo">

                    <label for="genero">Gênero:</label>
                    <input type="text" id="generoLivro" name="genero" required>
                    
                    <label for="autor">Autor:</label>
                    <select id="autorLivro" name="autor" required>
                      <option value="autor1">Autor 1</option>
                      <option value="autor2">Autor 2</option>
                      <option value="autor3">Autor 3</option>
                    </select>

                    <label for="editora">Editora:</label>
                    <select id="editoraLivro" name="editora" required>
                      <option value="editora1">Editora 1</option>
                      <option value="editora2">Editora 2</option>
                      <option value="editora3">Editora 3</option>
                    </select>

                    <label for="isbn">Código ISBN:</label>
                    <input type="text" id="isbnLivro" name="isbn" required>
                    
                    <button class="botaoConfirmar" type="submit">Cadastrar</button>
                </form>
            </div>
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
        </section>
    </main>
    <script src="js/javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //Instituição
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
        
        //Professor
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
                    document.getElementById('senhaProfessor').value = '';
                    document.getElementById('confirmar_senhaProfessor').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //Aluno
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
                    document.getElementById('senhaAluno').value = '';
                    document.getElementById('confirmar_senhaAluno').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //Pessoa
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

        //Editora
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

        //Autor
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
                    document.getElementById('emailAutor').value = '';
                    document.getElementById('paisAutor').value = '';
                    document.getElementById('instagramAutor').value = '';
                    },
                    error: function(xhr, status, error) {
                    console.log(error);
                    }
                });
            });
        });

        //Livro
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
    </script>
</body>
</html>
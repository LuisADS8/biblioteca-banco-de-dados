<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>BiblioTech</title>
</head>
<body>
    <section>
        <div class="img">
            <img src="images/logo_bibliotech.jpg" alt="Logo do sistema">
            <h1>Seja bem-vindo(a)</h1>
        </div>
        <form class="login" action="processar_login.php" method="POST">
            <label for="username">Usuário</label>
            <input class="text" type="text" id="username" name="username" required>
            <label for="password">Senha</label>
            <input class="text" type="password" id="password" name="password" required>
            <input class="button" type="submit" value="Entrar">
        </form>
    </section>
</body>
</html>


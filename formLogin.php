<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <script src="https://kit.fontawesome.com/90784f6646.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="login">
            <!-- Logo -->
            <i class="fa-solid fa-rocket"></i>
            <span class="logo">
                <a class="link-dark" href="./index.php">Rocket news</a>
            </span>
            <!-- Formulário -->
            <h1 class="text-center">Login</h1>
            <p class="text-center">Novo no site? <a href="./formCadastroUsuario.php" class="link-danger">Criar nova conta</a></p>
            <form class="needs-validation" action="./login.php" method="post">
                <div class="form-group was-validated">
                    <!-- Email -->
                    <label for="email">Email*</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" maxlength="50" required>
                </div>
                <div class="form-group was-validated">
                    <!-- Senha -->
                    <label for="senha">Senha*</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" maxlength="50" required>
                </div>
                <button class="w-100 btn btn-lg btn-success" type="submit">Entrar</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
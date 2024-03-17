<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/cadastroUsuario.css">
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <script src="https://kit.fontawesome.com/90784f6646.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="cadastroUsuario">
            <!-- Logo -->
            <i class="fa-solid fa-rocket"></i>
            <span class="logo">
                <a class="link-dark" href="./index.php">Rocket news</a>
            </span>
            <h1 class="text-center">Criar conta</h1>
            <!-- Formulário -->
            <form class="row needs-validation" action="salvarCadastroUsuario.php" method="post">
                <div class="form-group was-validated">
                    <!-- Nome -->
                    <label class="form-label" for="name">Nome*</label>
                    <input class="form-control" placeholder="Seu nome" type="name" id="nome" name="nome" required>
                </div>
                <div class="form-group was-validated">
                    <!-- Email -->
                    <label class="form-label" for="email">Email*</label>
                    <input class="form-control" placeholder="email@exemplo.com" type="email" id="email" name="email" required>
                </div>
                <div class="form-group was-validated">
                    <!-- Senha -->
                    <label class="form-label" for="password">Senha*</label>
                    <input class="form-control" placeholder="Utilize 8 ou mais carateres." type="password" id="senha" name="senha" required>
                </div>
                <button class="btn btn-lg btn-success" type="submit">Cadastrar</button>
            </form>
            <p class="text-center pt-2">Já possui conta? <a href="./formLogin.php" class="link-danger">Login</a></p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de novas notícias</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/cadastroNoticias.css">
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">  
        <script src="https://kit.fontawesome.com/90784f6646.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="cadastroNoticias">
            <!-- Logo -->
            <i class="fa-solid fa-rocket"></i>
                <span class="logo">
                    <a class="link-dark" href="./index.php">Rocket news</a>
                </span>
            <!-- Formulário -->
            <h1 class="text-center">Cadastro de novas notícias</h1>
            <form class="row mt-12 needs-validation" novalidate enctype="multipart/form-data" id="form" autocomplete="off" method="post" action="salvarCadastroNoticias.php">
                <div class="form-group col-lg-6 was-validated">
                    <!-- Título da notícia -->
                    <label class="form-label" for="titulo">Título da notícia* (Caracteres máx. 50)</label>
                    <input class="form-control" type="text" maxlength="50" id="titulo" name="titulo" required>
                </div>
                <div class="form-group col-lg-6 was-validated">
                    <!-- Subtítulo -->
                    <label class="form-label" for="subtitulo">Subtítulo* (Caracteres máx. 150)</label>
                    <input class="form-control" type="text" maxlength="150" id="subtitulo" name="subtitulo" required>
                </div>
                <div class="form-group col-lg-6 was-validated">
                    <!-- Autor -->
                    <label class="form-label" for="autor">Autor*</label>
                    <input class="form-control" type="text" id="autor" name="autor" required>
                </div>
                <div class="form-group col-lg-6 was-validated">
                    <!-- Data de publicação -->
                    <label class="form-label" for="calendario">Data de publicação*</label>
                    <input class="form-control" type="date" id="calendario" name="calendario" required>
                </div>
                <div class="form-group col-lg-12 was-validated">
                    <!-- Imagem -->
                    <label class="form-label" for="imagem">Imagem* (Tamanho máx. 5 MB | Tipo .jpg/jpeg)</label>
                    <input type="file" accept=".jpg" class="form-control" value="Carregar arquivo" id="imagem" name="imagem" required>
                </div>
                <div class="form-group col-lg-12 was-validated">
                    <!-- Texto -->
                    <label class="form-label" for="texto">Texto* (Caracteres máx. 6000)</label>
                    <textarea rows="3" class="form-control" maxlength="6000" id="texto" name="texto" required></textarea>
                </div>
                <button class="w-100 btn btn-lg btn-success" type="submit">Publicar</button>
            </form>
        </div>
        <!-- Mensagens Toast -->
        <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 11">
            <div id="liveToast" class="toast hide bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body"></div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="js/formCadastroNoticias.js" type="text/javascript"></script>
    </body>
</html>
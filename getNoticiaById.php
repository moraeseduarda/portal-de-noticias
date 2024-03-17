<?php
require_once 'parametros.php';

try {
    $noticia_id = isset($_GET['noticia_id']) ? $_GET['noticia_id'] : '';

    if (!$noticia_id) {
        throw new Exception('Deve ser informado uma notícia a ser localizada.');
    }

    $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
    $sql = "SELECT 
            noticia_id,
            titulo, 
            subtitulo, 
            autor,
            imagem, 
            DATE_FORMAT(calendario, '%d/%m/%Y') AS calendario,
            texto
            FROM noticias
            WHERE (noticia_id = :noticia_id)
            ORDER BY titulo
            LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(':noticia_id', $noticia_id);
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $noticias = $resultado[0];

    if (!$noticias) {
        throw new Exception('O notícia informada não existe.');
    }

    $html = '<div class="modal-content">
                <div class="modal-header"> 
                    <h1 class="modal-title fs-5" id="scrollableBackdropLabel">Notícias</h1>
                    <i class="fa-solid fa-rocket px-2"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a class="bt-modal text-decoration-none" id="noticia-imagem"><img src="upload/' . $noticias['imagem'] . '" class="d-block w-100" alt="..."></a>
                    <h5 class="text-center p-2">' . $noticias['titulo'] . '</h5>
                    <p class="text-center">'. $noticias['subtitulo'] .'</p>
                    <p class="text-center"><strong><a href="#" data-bs-toggle="tooltip" title="Lorem">' . $noticias['autor'] . '</a> - ' . $noticias['calendario'] . '</strong></p>
                    <p>' . $noticias['texto'] . '</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>';
} catch (Exception $e) {
    $html = '<div class="modal-content">
        <div class="modal-header">
            <div class="modal-title fs-5">
                <h4 class="h4">Erro no carregamento</h4>
            </div>
        </div>
        <div class="modal-body">
            <div>
                <p>Não foi possivel carregar detalhes das notícias.</p>
                <p>' . $e->getMessage() . '</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
    </div>';
}

echo $html;

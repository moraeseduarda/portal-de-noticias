<?php
require_once 'parametros.php';

try {
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
                ORDER BY noticia_id DESC";

    $noticiaList = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $html = '';
    foreach ($noticiaList as $noticias) {
        $html .= 
                '<div class="col-md-4 noticia-list-item"
                  data-id="' . $noticias['noticia_id'] . '">
                    <div class="card mb-4 shadow-sm">
                      <a href="#">
                      <img src="upload/' . $noticias['imagem'] .'"class="card-img-top" style="height:225px; width:100%; display:block">
                      </a>
                      <div class="card-body">
                        <a style="text-decoration: none;" href="#">
                        <h5 class="card-title text-success">'. $noticias['titulo'] .'</h5>
                        </a>
                        <p class="card-text">'. $noticias['subtitulo'] .'</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-danger disabled">'. $noticias['autor'] .'</button>
                            </div>
                            <small class="text-muted">'. $noticias['calendario'] . '</small>
                        </div>
                      </div>
                    </div>
                  </div>';
        
    }
} catch (Exception $e) {
    $html = '<p>Não foi possível carregar todas as notícias.</p>';
}

echo $html;


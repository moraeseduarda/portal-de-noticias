<?php
$upload = $_FILES['imagem'];

$tipo = 'image/jpeg';
$tamanhoMaximo = 5242880;
$arquivoDefinitivo = 'upload/' . $upload['name'];

$tipoValido = $upload['type'] == $tipo ? true : false;
$tamanhoValido = $upload['size'] <= $tamanhoMaximo ? true : false;

if($tipoValido && $tamanhoValido) {
    if(move_uploaded_file($upload['tmp_name'], $arquivoDefinitivo)) {
        $dadosPdo = [
            'dns' => 'mysql:host=localhost; dbname=projeto_final_udesc',
            'usuario' => 'root',
            'senha' => ''
        ];
        $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
        $sql = "INSERT INTO noticias
                    (titulo, subtitulo, autor, calendario, imagem, texto)
                VALUES
                    (:titulo, :subtitulo, :autor, :calendario, :imagem, :texto)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(':titulo', $_POST['titulo']);
        $consulta->bindParam(':subtitulo', $_POST['subtitulo']);
        $consulta->bindParam(':autor', $_POST['autor']);
        $consulta->bindParam(':calendario', $_POST['calendario']);
        $consulta->bindParam(':imagem', $upload['name']);
        $consulta->bindParam(':texto', $_POST['texto']);
        $consulta->execute();
        $retorno = [
            'status' => 'sucesso',
            'mensagem' => 'Notícia cadastrada com sucesso.'
        ];
    } else {
        $retorno = [
            'status' => 'erro',
            'mensagem' => 'Nao foi possivel salvar a notícia.'
        ];
    }
} else {
    $retorno = [
        'status' => 'erro',
        'mensagem' => 'Notícia inválida.'
    ];
}

echo json_encode($retorno);
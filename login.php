<?php
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha =  isset($_POST['senha']) ? $_POST['senha'] : '';

    $dadosPdo = [
        'dns' => 'mysql:host=localhost;dbname=projeto_final_udesc',
        'usuario' => 'root',
        'senha' => ''
    ];
    $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
    $sql = "SELECT 
                nome, usuario_id
                FROM usuarios
                WHERE
                    (email = :email)
                    AND (senha = PASSWORD(:senha))";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(':email', $email);
    $consulta->bindParam(':senha', $senha);
    $consulta->execute();
    $resultado = $consulta->fetchAll();

    session_start();
    if ($resultado) {
        $_SESSION['login'] = [
            'nome' => $resultado[0]['nome'],
            'usuario_id' => $resultado[0]['usuario_id']
        ];
        header('Location: index.php');
    } else {
        session_destroy();
        header('Location: formLogin.php?erro=1');
    }



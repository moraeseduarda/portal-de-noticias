<?php
    $dadosPdo = [
        'dns' => 'mysql:host=localhost; dbname=projeto_final_udesc',
        'usuario' => 'root',
        'senha' => ''
    ];
    $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
    $sql = "INSERT INTO usuarios
                (nome, email, senha)
            VALUES
                (:nome, :email, PASSWORD(:senha))";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(':nome', $_POST['nome']);
    $consulta->bindParam(':email', $_POST['email']);
    $consulta->bindParam(':senha', $_POST['senha']);
    $resultado = $consulta->execute();

    session_start();
    if ($resultado) {
        $_SESSION['login'] = [
            'nome' => $resultado[0]['nome'],
            'usuario_id' => $resultado[0]['usuario_id']
        ];
        header('Location: index.php');
    } else {
        session_destroy();
        // Redirecionamento de página
        // header('Location: url');
        header('Location: formLogin.php?erro=1');
    }


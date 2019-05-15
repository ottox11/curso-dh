<?php

function save_as_json($file, $content) {
    $json = json_encode([$content], JSON_PRETTY_PRINT);

    if (file_exists($file)) {
        $data = file_get_contents($file);

        $json = json_decode($data, true);

        $json[] = $content;

        $json = json_encode($json, JSON_PRETTY_PRINT);
    }

    file_put_contents($file, $json);
}

if (!empty($_POST)) {

    $usuario = [
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ];

    save_as_json('usuarios.json', $usuario);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="-.php">
        <div>
            <input type="text" placeholder="email" name="email">
        </div>
        <div>
            <input type="password" placeholder="password" name="password">
        </div>
        <div>
            <button>Enviar</button>
        </div>
    </form>

</body>
</html>

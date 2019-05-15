<?php

//$x = empty($_POST);
//var_dump($x);

if(empty($_POST)){
$nombreU = $_POST['nombre'];
$correo =  $_POST['email'];
$clave = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $usuario = [
  "email" => $nombreU,
  "username" => $correo,
  "password" => $clave,
];
$json = json_encode([$usuario], JSON_PRETTY_PRINT);

if (file_exists('usuario.json')) {
  $data = file_get_contents('usuario.json');

  $json = json_decode($data, true);

  $json[] = $usuario;

  $json = json_encode($usuario, JSON_PRETTY_PRINT);
}

file_put_contents('usuario.json', $json);


}

else {
  echo 'error';
}


 ?>

 <!DOCTYPE HTML>
 <html>
 <body>
 <form action="practica.php" method="post">
 <label for="nombre">Nombre:</label>
 <input type="text" name="nombre">
 <br>
 <br>
 <label for="email">E-mail:</label>
 <input type="text" name="email">
 <br>
 <br>
 <label for="email">Contraseña:</label>
 <input type="text" name="password">
 <br>
 <br>
 <input type="submit">
 </form>
 </body>
 </html>

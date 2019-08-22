<?php

$nombre='';
$email='';

if (isset($_POST)){
if (!empty($_POST['nombre'])){
  if (!empty($_POST['email'])){
    echo 'Bienvenido' . ' ' . $_POST['nombre'] . ' ' . 'ha sido registrado con el email' . ' ' . $_POST['email'];
  }
}
  if (empty($_POST['nombre'])){
      if (!empty($_POST['email'])){
    echo 'Bienvenido' . ' ' . $_POST['email'];
}
}

  var_dump ($_POST );exit;

}

 ?>

<!DOCTYPE HTML>
<html>
<body>
<form action="registracion.php" method="post">
<label for="nombre">Nombre:</label>
<input type="text" name="nombre">
<br>
<label for="email">E-mail:</label>
<input type="text" name="email">
<br>
<input type="submit">
</form>
</body>
</html>

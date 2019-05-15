<?php

$nombre='';
$email='';

if($_POST){
  var_dump ($_POST['nombre']);
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

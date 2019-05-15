<?php






function describirUnProducto(){
  return var_dump($_GET);
}

describirUnProducto();
 ?>

// isset = si existe la variable o el indice

 // empty = verifica si un string está vacio

 // strlen = devuelve la cantidad de caracteres de un string

 // count = devuelve la cantidad de indices de un ARRAY


///// VARIABLES SUPER GLOBALES ////////////

///  $_GET;
//// $_POST;
<?php
<form class=""  type="text" action="index.php" name="usuario" method="post">
  <input type="text" name="usuario" value="">
  <button type="submit" name="button">enviar</button>
</form>

 var_dump($_POST);

 ?>

<?php
foreach ($errors as $error): {

}
 ?>
 <p><?= $error ?></p>

<?php endforeach ?>

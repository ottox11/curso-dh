

<?php

$errors = [];

function is_email($txt){
  return filter_var($txt, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER[REQUEST_METHOD] === 'POST' && !empty($_POST)){


  if (! is_email($_POST['email'])){
    $errors['email'][]='El email no tiene formato válido';

}

if (empty($_POST['mensaje'])){
  $errors['mensaje'][]='El mensaje es requerido';

}

if(strlen($_POST['mensaje']) > 1 && strlen($_POST['mensaje']) < 10){
  $errors['mensaje'][]='El mesaje debe tener al menos 10caracteres';
}

if (empty($errors)){
  header('location: confirmacion.php');
}

var_dump($_POST);

}
var_dump($errors);
 ?>

 <?php foreach ($errors as $error):
           foreach($error as $value):
   ?>

   <?=$value?>

 <?php
   endforeach;
endforeach;
  ?>

 <form class="" action="contacto.php" method="post">
   <label for="Email">Email</label>
   <input type="text" name="email" value="">
   <p><?=$errors['email'][0] ?? '' ?></p>
   <textarea name="mensaje" rows="8" cols="80"></textarea>
   <button type="submit" name="button">enviar</button>
 </form>

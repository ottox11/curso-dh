////// VALIDACIÓN DE ARCHIVOS ////////

<?php

if ($_FILES){
  if($_FILES['cv']['error'] != 0){
  echo 'Hubo un error al cargar el CV <br>';
}
else {
  $ext= pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
  if ($ext != 'pdf' && $ext != 'doc' && $ext != 'docx'){
    echo 'El CV debe ser pdf, doc o docx <br>';
  }
  else {
    move_uploaded_file($_FILES['cv']['tmp_name'], "/var/www/html/curso-dh/archivos/cv." . $ext);
  }

}
if($_FILES['imagen']['error'] != 0){
echo 'Hubo un error al cargar la imagen <br>';
}
else {
  $ext= pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
  if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png'){
    echo 'La imagen debe ser jpg, jpeg o png <br>';
  }
  else{
    move_uploaded_file($_FILES['imagen']['tmp_name'], '/var/www/html/curso-dh/archivos/imagen.' . $ext);
  }
}
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="inicio.php" method="post" enctype="multipart/form-data">
    <div class="">
      <label for="">CV</label>
      <input type="file" name="cv" value="">
    </div>
      <div class="">
        <label for="">Imagen</label>
        <input type="file" name="imagen" value="">
      </div>
        <div class="">
          <button type="submit" name="button">Enviar</button>
          </div>
    </form>
  </body>
</html>

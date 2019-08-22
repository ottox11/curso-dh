/////////// Manejo de archivos con nombre hasheado ///////////

<?php

$ext= pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

$hashedName = md5($_FILES['avatar']['name'])). '.' . $ext;

$path = 'nombreCarpeta/' . $hashedName;

move_uploaded_file($_FILES['imagen']['tmp_name'],$path);

 ?>
-->
<div class="container col-10 col-md-6 col-lg-4">
  <div class="container_form">
    <form method="POST" action="login.php">
      <div class="form-group">
        <label class="exampleInput" for="exampleInputEmail1">Dirección Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
        <p><?= $errorArray['email'] ?? '' ?></p>
      </div>
      <div class="form-group">
        <label class="exampleInput" for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
    </form>
  </div>
</div>
<div class="not-login">
    <div class="container-buttons">
      <button type="submit" class="btn btn-sm btn-secondary">Registrate</button>
      <button type="submit" class="btn btn-sm btn-secondary">olvidé mi contraseña</button>
  </div>
</div>

<?php

require 'src/entities/User.php';
require 'src/entities/UserValidator/UserValidator.php';

if (!empty($_POST)){
$validator = new UserValidator($_POST);
$validator->validate();

if ($validator->isValid()){

$user = new User;
$user->setEmail($_POST['email']);
$user->setPassword($_POST['password']);



$pdo = new PDO ('mysql:dbname=movies_db;host=localhost', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO users (id, email, password, created_at) VALUES (:id, :email, :password, :created_at)';

$stmt = $pdo->prepare($sql);

$stmt->bindValue('id',$user->getId());
$stmt->bindValue('email',$user->getEmail());
$stmt->bindValue('password',$user->getPassword());
$stmt->bindValue('created_at',$user->getRegistrationDate()->format('Y-m-d H:i:s'));

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

//Esto va ubicado donde lo tenia antes
<?php if(isset($validador)): ?>

<ul>
  <?php foreach ($validator->getErrors() as $error): ?>
  <li><?= $error ?></li>
  <?php endforeach ?>
</ul>
<?php endif ?>

// En caso de colocar el error cerca del campo correspondiente
<p><?php if (isset($validator)){echo $validator->getError('email'); }?></p>

  </body>
</html>

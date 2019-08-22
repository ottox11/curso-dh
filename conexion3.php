<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=movies_db','admin','3678698o');


$sql = "Delete from movies where title = :title";

// PDOStatement
$stmt = $pdo->prepare('$sql');

$stmt->bindValue(1, 'abc');
$stmt->bindValue(2, 'def');
$stmt->bindValue(3, '020202');

// boolean
$result = $stmt->execute();

//data
//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//foreach($data as $value){
//  echo $value['title'].'<br>';

$data = $stmt->fetch(PDO::FETCH_ASSOC);
}

} catch (Exception $e){
  die('No hay conexión con la base de datos');
  echo $e->getMessage();
}

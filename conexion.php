<?php

require 'function.php';

try {
$pdo = get_connection();

if ($pdo){
// PDOStatement
$stmt = $pdo->prepare('select * from movies');

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


//var_dump($data);
 ?>

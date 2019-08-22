<?php

function get_connection() {
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=movies_db','admin','3678698o');

  }catch(Exception $e){
    return false;
  }

}


 ?>

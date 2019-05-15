<?php

function redirect($url){
  header(location: . $url);
}

session_start();

if(isset($_REQUEST['action'])){
  if($_REQUEST['action'] == 'reinicio'){
    $_SESSION['contador'] = 0;
  }
  elseif ($_REQUEST['action'] == 'aumentar') {
    $_SESSION['contador']++;
  }
  elseif ($_REQUEST['action'] == 'logoff') {
    session_destroy();
    redirect('login.php');
    //LLamada a la función 
  }
}



 ?>

<?=$_SESSION['contador']?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="modificar.php" method="post">
    <button type="submit"name="action" value="reinicio">Reiniciar</button>
    <br>
    <br>
    <button type="submit" name="action" value="aumentar">Incremetar</button>
    </form>
  </body>
</html>

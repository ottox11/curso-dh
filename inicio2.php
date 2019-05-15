////// JSON /////////

<?php

/* $autos = [
     0 => ['marca' => 'ford',
          'modelo' => 'fiesta',
          'patente' => 'HYG789'
          ]

/*     1 => ['marca' => 'toyota',
          'modelo' => 'corolla',
          'patente' => 'HFF545'
          ]

     1 => ['marca' => 'renault',
           'modelo' => 'tigo',
           'patente' => 'HFR666'
          ] */

      //  ];

  /*      $json = json_encode($autos);

      //  $arrayOriginal = json_decode($json, true);

file_put_contents("autos.json",$json); */

$archivo = file_get_contents("autos.json");
echo "$archivo";

 ?>

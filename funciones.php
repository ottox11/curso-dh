<?php

function get_value($valor){
  return $_POST($valor) ?? '';

}

function save_as_json($file, $content) {
    $json = json_encode([$content], JSON_PRETTY_PRINT);

    if (file_exists($file)) {
        $data = file_get_contents($file);

        $json = json_decode($data, true);

        $json[] = $content;

        $json = json_encode($json, JSON_PRETTY_PRINT);
    }

    file_put_contents($file, $json);
}


 ?>

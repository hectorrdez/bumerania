<?php 
if(file_exists('./connection-config.json')){
    $json = file_get_contents('./connection-config.json');
    $file = json_decode($json);
}

$connection = new mysqli($file['ip'], $file['user'], $file['pass'], $file['db'], $file['port'] );
?>
<?php 

$leitura = $_GET['leitura'];

echo json_encode([
    'recipe' => '', 
    'leitura' => $leitura
]);
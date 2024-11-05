<?php


// ini_set('memory_limit', '255M');
// echo ini_get('memory_limit');

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

$app  = include __DIR__  . "/../src/App/bootstrap.php";




$app->run();
<?php


// ini_set('memory_limit', '255M');
// echo ini_get('memory_limit');



include __DIR__ . "/../src/App/function.php";

$app  = include __DIR__  . "/../src/App/bootstrap.php";

$app->run();

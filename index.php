<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
    
	$arreglo = ["llave" => ["hola" => "mundo"]];
	
	return $app->json($arreglo);
});

$app->run();
<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros/filter', 'App\Controllers\jcmaLibrosController:jcmagetFilter');  
    $group->get('/libros/update', 'App\Controllers\jcmaLibrosController:jcmaUpdate');
});








<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/heroes', 'App\Controllers\heroesController:getAll');  
});
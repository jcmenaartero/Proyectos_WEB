<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->post('/detalle/new', 'App\Controllers\jcmaDetallesController:jcmanew');
});
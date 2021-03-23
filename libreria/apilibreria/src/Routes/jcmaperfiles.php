<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->post('/perfiles/new', 'App\Controllers\jcmaPerfilesController:jcmanew');
});
<?php

use Slim\Routing\RouteCollectorProxy;


$app->group('/api', function(RouteCollectorProxy $group){
    $group->post('/usuarios/new', 'App\Controllers\jcmaUsuariosController:jcmanew');
});

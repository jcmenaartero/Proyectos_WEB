<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla usuarios

$app->group('/api', function(RouteCollectorProxy $group){
    $group->post('/usuarios/new', 'App\Controllers\jcmaUsuariosController:jcmanew');
    /*$group->delete('/usuarios/drop', 'App\Controllers\UsuariosController:drop'); 
    $group->get('/usuarios', 'App\Controllers\UsuariosController:getAll');  */
});

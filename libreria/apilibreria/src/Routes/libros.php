<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

//contendrá los entrypoints (acciones CRUD) de la tabla libros
/*$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\LibrosController:getAll');
    $group->post('/libros/new', 'App\Controllers\LibrosController:new');   
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});*/


$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', function(Request $request, Response $response, $args) {
        $response->getBody()->write("Hello, I'm your libros.php file");
        return $response;
    });
});

$app->run();






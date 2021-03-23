<?php
use Slim\Routing\RouteCollectorProxy;
/*//FUNCION DE PRUEBA /index.php/libros
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;*/

$app->group('/api', function(RouteCollectorProxy $group){
    //$group->get('/libros', 'App\Controllers\LibrosController:getAll');
    //$group->post('/libros/new', 'App\Controllers\LibrosController:new'); 
    $group->get('/libros/filter', 'App\Controllers\jcmaLibrosController:jcmagetFilter');  
    //$group->get('/libros/editores', 'App\Controllers\LibrosController:getLiEd');
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});

/*//FUNCION DE PRUEBA /index.php/libros
$app->get("/libros", function(Request $request, Response $response, $args) {
    $response->getBody()->write("Hello, I'm your libros.php file");
    return $response;
});*/







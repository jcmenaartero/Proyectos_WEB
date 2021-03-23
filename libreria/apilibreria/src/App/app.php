<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
// cargamos el autoload para que pueda detectar el resto de las clases
require __DIR__. '/../../vendor/autoload.php';
 
 
// creamos la aplicación php
$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");
 
require __DIR__. "/../Routes/jcmalibros.php";
require __DIR__. "/../Routes/jcmausuarios.php";
require __DIR__. "/../Routes/jcmaperfiles.php";
require __DIR__. "/../Routes/jcmadetalles.php";

$app->run();



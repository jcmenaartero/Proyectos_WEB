<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__. '/../../vendor/autoload.php';
 
 
$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");
 
require __DIR__. "/../Routes/jcmalibros.php";
require __DIR__. "/../Routes/jcmausuarios.php";
require __DIR__. "/../Routes/jcmaperfiles.php";
require __DIR__. "/../Routes/jcmadetalles.php";

$app->run();



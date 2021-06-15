<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__. '/../../vendor/autoload.php';
 
 
$app = AppFactory::create();
$app->setBasePath("/comicsheros/backend/public/index.php");
 
require __DIR__. "/../Routes/heroes.php";

$app->run();



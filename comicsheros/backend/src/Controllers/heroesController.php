<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\heroesModel;    

    class heroesController {

        public function getAll(Request $request, Response $response, $args){
            $heroes = heroesModel::getAll();
            $heroesJson = json_encode($heroes);
            $response->getBody()->write($heroesJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        

    }
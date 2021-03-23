<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\jcmaLibrosModel;    

    class jcmaLibrosController {

        public function jcmagetFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            //var_dump($parametros);
            $precio = $parametros['precio'];
            $categoria = $parametros['categoria'];
            $param = array($precio,$categoria);
            $libros = jcmaLibrosModel::jcmagetFilter($param);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        
        /*public function new($request, $response, $args){
            $response->getBody()->write("Insertar un nuevo Libro");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function getAll($request, $response, $args){
            $libros = LibrosModel::getAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            //FUNCION DE PRUEBA /index.php/api/libros
            $response->getBody()->write("Hello, I'm your LibrosController.php file");
            return $response;
            
        }

        public function getLiEd($request, $response, $args){
            $libros = LibrosModel::getLiEd();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            //FUNCION DE PRUEBA /index.php/api/libros
            $response->getBody()->write("Hello, I'm your LibrosController.php file");
            return $response;
            
        }*/

    }
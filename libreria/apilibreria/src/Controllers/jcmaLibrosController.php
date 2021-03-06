<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\jcmaLibrosModel;    

    class jcmaLibrosController {

        public function jcmagetFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            
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
        
        public function jcmaUpdate(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();

            $editorid = (int)$parametros['editorid'];
            $stock = (int)$parametros['stock'];
            $precio = (double)$parametros['precio'];

            $param = array($stock,$precio,$editorid);

            $libros = jcmaLibrosModel::jcmaUpdate($param);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

        public function jcmagetComprados(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            
            $userid = $parametros['id'];
            
            $param = array($userid);
            $libros = jcmaLibrosModel::jcmagetComprados($param);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }

    }
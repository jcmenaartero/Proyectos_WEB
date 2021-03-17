<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\UsuariosModel;
    class UsuariosController {
    
        public function new(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();
            
            $id = (int)$parametros['id'];
            $nombre = $parametros['nombre'];
            $apellidos = $parametros['apellidos'];
            $direccion = $parametros['direccion'];
            $ciudad = $parametros['ciudad'];
            $nac = (int)$parametros['nacimiento'];
            
            $param = array($id,$nombre,$apellidos,$direccion,$ciudad,$nac);
            $usuario = UsuariosModel::new($param);
            $response->getBody()->write($usuario);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
       
        public function getAll($request, $response, $args){
            $response->getBody()->write("Listado de Usuarios");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
            }
    }

<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\jcmaUsuariosModel;
    class jcmaUsuariosController {
    
        public function jcmanew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();

            $id = (int)$parametros['id'];
            $nombre = $parametros['nombre'];
            $apellidos = $parametros['apellidos'];
            $direccion = $parametros['direccion'];
            $ciudad = $parametros['ciudad'];
            $nac = (int)$parametros['nacimiento'];
            
            $param = array($id,$nombre,$apellidos,$direccion,$ciudad,$nac);
            $usuario = jcmaUsuariosModel::jcmanew($param);
            $usuarioJson = json_encode($usuario);
            $response->getBody()->write($usuarioJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
       
    }

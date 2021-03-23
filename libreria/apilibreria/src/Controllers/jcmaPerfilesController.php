<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\jcmaPerfilesModel;
    class jcmaPerfilesController {
    
        public function jcmanew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();

            $id = (int)$parametros['perfilid'];
            $email = $parametros['email'];
            $facebook = $parametros['facebook'];
            $insta = $parametros['instagram'];
            $foto = $parametros['foto'];
            $userid = (int)$parametros['userid'];
            
            $param = array($id,$email,$facebook,$insta,$foto,$userid);
            $perfil = jcmaPerfilesModel::jcmanew($param);
            $perfilJson = json_encode($perfil);
            $response->getBody()->write($perfilJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }

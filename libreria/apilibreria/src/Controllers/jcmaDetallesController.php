<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Model\jcmaDetallesModel;
    class jcmaDetallesController {
    
        public function jcmanew(Request  $request, Response $response, $args){
            $parametros = $request->getParsedBody();

            $libroid = (int)$parametros['idlibro'];
            $userid = (int)$parametros['userid'];
            $cantidad = (int)$parametros['cantidad'];
            $descuento = (double)$parametros['descuento'];
            
            $param = array($libroid,$userid,$cantidad,$descuento);
            $detalle = jcmaDetallesModel::jcmanew($param);
            $detalleJson = json_encode($detalle);
            $response->getBody()->write($detalleJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
    }

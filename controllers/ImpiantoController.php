<?php 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once "Impianto.php";
include_once "DispositivoDiAllarme.php";

class ImpiantoController {

    function impianto(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $response->getBody()->write(json_encode($imp));
        return $response;
    }

    function allarme(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $a=$imp->getAllarmi();
        
        $response->getBody()->write(json_encode($imp->getAllarmi()));
        return $response;
    }

    function searchAllarme(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $id=$args["identificativo"];
        $allarme=$imp->searchAllarme($id);
        
        $response->getBody()->write(json_encode($allarme));
        return $response;
    }


    function rilevatoriPressione(Request $request, Response $response, $args) {
        $imp=new Impianto();
        
        
        $response->getBody()->write(json_encode($imp->getRilevatoriPressione()));
        return $response;
    }

    
    function searchRilevatoriPressione(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $id=$args["identificativo"];
        $rilevatore=$imp->searchRilevatorePressione($id);
        
        $response->getBody()->write(json_encode($rilevatore));
        return $response;
    }

    function misurazioniPressione(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $id=$args["identificativo"];
        $rilevatore=$imp->searchRilevatorePressione($id);
        
        $response->getBody()->write(json_encode($rilevatore->getMis()));
        return $response;
    }

    //mis maggiore e minore

    function rilevatoriUmidita(Request $request, Response $response, $args) {
        $imp=new Impianto();
        
        
        $response->getBody()->write(json_encode($imp->getRilevatoriUmidita()));
        return $response;
    }

    function searchRilevatoriUmidita(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $id=$args["identificativo"];
        $rilevatore=$imp->searchRilevatoreUmidita($id);
        
        $response->getBody()->write(json_encode($rilevatore));
        return $response;
    }

    function misurazioniUmidita(Request $request, Response $response, $args) {
        $imp=new Impianto();
        $id=$args["identificativo"];
        $rilevatore=$imp->searchRilevatoreUmidita($id);
        
        $response->getBody()->write(json_encode($rilevatore->getMis()));
        return $response;
    }

    //mis maggiore e minore
}

?>
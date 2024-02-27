<?php 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once 'Classe.php';
include_once 'Alunno.php';

class AlunniApiController {

    function index(Request $request, Response $response, $args) {
        $classe = new Classe();
        $response->getBody()->write(json_encode($classe));
        return $response->withHeader('Content-Type', 'application/json');
    }

    function show(Request $request, Response $response, $args) {
        $classe = new Classe();
    
        $nomeCercato = $args['nome'];
        $alunnoCercato = null;

        foreach ($classe->lista_alunni as $alunno) {
            if (strtolower($alunno->getNome()) === strtolower($nomeCercato)) {
                $alunnoCercato = $alunno;
                break;
            }
        }
        
        if (!empty($alunnoCercato)) {
            $response->getBody()->write(json_encode($alunnoCercato));
        } else {
            $response->getBody()->write("Alunno non presente");
        }
        
        return $response->withHeader('Content-Type', 'application/json');
    }

}

?>
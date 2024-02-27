<?php 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once 'Classe.php';
include_once 'Alunno.php';

class AlunniController {

    function index(Request $request, Response $response, $args) {
        $classe = new Classe();
        $response->getBody()->write($classe->stampaClasse());
        return $response;
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
            $s = $alunnoCercato->stampaAlunno();
        } else {
            $s = "Alunno non presente";
        }
        
        $response->getBody()->write($s);
        return $response;
    }
    
}

?>
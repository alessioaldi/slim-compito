<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include 'Classe.php';
include 'Alunno.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$classe = new Classe();

$app->get('/alunni', function (Request $request, Response $response, $args) use ($classe) {
    $response->getBody()->write($classe->stampaClasse());
    return $response;
});

$app->get('/alunni/{nome}', function (Request $request, Response $response, $args) use ($classe) {
    
    $nomeCercato = $args['nome'];
    $alunnoCercato = null;

    foreach ($classe->lista_alunni as $alunno) {
        if (strtolower($alunno->getNome()) === $nomeCercato) {
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
});

$app->run();

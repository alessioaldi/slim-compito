<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once 'controllers/ImpiantoController.php';

$app = AppFactory::create();

$app->get('/impianto', 'ImpiantoController:impianto');
$app->get('/dispositivi_di_allarme', 'ImpiantoController:allarme');
$app->get('/dispositivi_di_allarme/{identificativo}', 'ImpiantoController:searchAllarme');
$app->get('/rilevatori_di_pressione', 'ImpiantoController:rilevatoriPressione');
$app->get('/rilevatori_di_pressione/{identificativo}', 'ImpiantoController:searchRilevatoriPressione');
$app->get('/rilevatori_di_pressione/{identificativo}/misurazioni', 'ImpiantoController:misurazioniPressione');

$app->get('/rilevatori_di_umidita', 'ImpiantoController:rilevatoriUmidita');
$app->get('/rilevatori_di_umidita/{identificativo}', 'ImpiantoController:searchRilevatoriUmidita');
$app->get('/rilevatori_di_umidita/{identificativo}/misurazioni', 'ImpiantoController:misurazioniUmidita');

$app->run();

?>

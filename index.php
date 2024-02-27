<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once 'controllers/SiteController.php';
include_once 'controllers/AlunniController.php';
include_once 'controllers/AlunniApiController.php';

$app = AppFactory::create();

$app->get('/', 'SiteController:index');

$app->get('/alunni', 'AlunniController:index');
$app->get('/alunni/{nome}', 'AlunniController:show');

$app->get('/api/alunni', 'AlunniApiController:index');
$app->get('/api/alunni/{nome}', 'AlunniApiController:show');

$app->run();

?>

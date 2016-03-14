<?php

/*
 *  Définir les routes/views pour chaque module
 */

### Principal Route call home_index ###
$app->get($app['rootRoute'].'/', function () use ($app) {
    return $app->redirect($app['url_generator']->generate('home_index'));
})->bind('homepage');

//Récupérer les routes du module SuiviAffaires
require_once $app['paths']['srcDir'].'/Bundles/LeBonSouk/Routes.php';


return $app;
<?php
ini_set('memory_limit', '-1');
// loader le framework
$loader = require_once __DIR__ . '/../vendor/autoload.php';
// instantier $app comme objet de Silex framework
$app = new Silex\Application();
// init les params dir de bases
$baseDir = dirname(dirname(__FILE__));
$aBaseDir = explode(DIRECTORY_SEPARATOR, $baseDir);
$rootFolder = end($aBaseDir);
$app['paths'] = array('rootFolder' => $rootFolder, 'baseDir' => $baseDir, 'webDir' => dirname(__FILE__), 'vendorDir' => $baseDir . '\vendor', 'appDir' => $baseDir . '\app', 'srcDir' => $baseDir . '\src');
$app['rootRoute'] = '/'.$rootFolder;
// Register the Security Service Provider
$app->register(new Silex\Provider\SessionServiceProvider());
// Register UrlGeneratorServiceProvider to call route by binded name
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
// Form configuration
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.domains' => array(),
));

// Twig configuration
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => $app['paths']['appDir']."/views",
    'twig.options' => array('cache' => $app['paths']['appDir']."/cache/twig"),
));

// charger le fichier de configuration
$ini_config = parse_ini_file($app['paths']['appDir'].'/config.ini', TRUE);
// récupérer l'environnement, définir mode de débug et récupérer des info de connexion BD
$env = isset($ini_config['application']['environnement']) ? $ini_config['application']['environnement'] : 'developpement';
$config = $ini_config[$env];
$app['debug'] = (isset($ini_config['application']['environnement']) && $ini_config['application']['environnement'] == "production") ? false : true;
//catch all errors and convert them to exceptions
Symfony\Component\Debug\ExceptionHandler::register($app['debug']);
// array info data base
$app['db.options'] = array(
    'driver'    => $config['db.driver'],
    'dbname'    => $config['db.dbname'],
    'host'      => $config['db.host'],
    'port'      => $config['db.port'],
    'user'      => $config['db.user'],
    'password'  => $config['db.password'],
    'charset'   => $config['db.charset'],
);




// instancier Doctrine DBAL
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => $app['db.options'],
));

$app['security.firewalls'] = array();
// Set the Firewall options



// Récupérer tous les routes avant de lancer l'application
$app = require_once $app['paths']['appDir'].'/routes.php';

// Gestion d'erreur 
$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) { // Si débuggage est activé on n'affiche pas les pages erreurs
        return;
    }
    // 404.html, or 40x.html, or 4xx.html, or default.html
    switch ($code) {
        case 404:
            $message    = 'Oupesss, La page demandée est introuvable.';
            $templates  = '/errors/'.$code.'.html.twig';
            break;
        case (substr($code, 0, 1) == 4):
            $message = 'Oupesss, Une erreur est survenue sur le client.';
            $templates  = '/errors/4xx.html.twig';
            break;
        case 500:
            $message = 'Oupesss, Erreur interne du serveur.';
            $templates  = '/errors/'.$code.'.html.twig';
            break;
        case (substr($code, 0, 1) == 5):
            $message = 'Oupesss, Une erreur est survenue sur le serveur.';
            $templates  = '/errors/5xx.html.twig';
            break;
        default:
            $message    = 'Oupesss, Nous sommes désolés mais quelque chose a terriblement mal.';
            $templates  = '/errors/default.html.twig';
    }
    return  $app['twig']->render($templates, array("message" => $message));
});

var_dump($app);
$app->run(); 
<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

//activation du plugin silex-php-view
$app->register(new SilexPhpView\ViewServiceProvider(), ['view.path'=>__DIR__.'/../views',]);

//appel le fichier book.php qui contient le code html
$app->get('/', function() use($app) {
  return  $app['view']->render('book.php');
});

//appel le fichier cv.php qui contient le code html
$app->get('/cv', function() use($app) {
    return  $app['view']->render('cv.php');
  });

$app->run();

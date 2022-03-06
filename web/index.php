<?php

require('../vendor/autoload.php');


$app['debug'] = true;

$app['twig']->render('index.twig');

$app->run();

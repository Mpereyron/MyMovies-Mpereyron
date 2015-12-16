<?php

use Symfony\Component\HttpFoundation\Request;



$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('home');

$app->get('/movie/{id}', function($id) use ($app) {
    $movie = $app['dao.movie']->find($id);
    return $app['twig']->render('index.html.twig', array('movie' => $movie));
})->bind('movie');





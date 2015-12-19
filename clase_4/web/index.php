<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// Twig register
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app['debug'] = true;

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Usando Silex',
        'body'      => 'Blog que habla sobre silex y sus bondades....',
    ),2 => array(
        'date'      => '2011-03-29',
        'author'    => 'carlos',
        'title'     => 'Usando Silex',
        'body'      => 'Blog que habla sobre silex y sus bondades....',
    ),
);

$app->get('/blog', function () use ($app, $blogPosts) {

    return $app['twig']->render('blogs.twig',
        array(
            'blogs' => $blogPosts
        ));
});

$app->run();